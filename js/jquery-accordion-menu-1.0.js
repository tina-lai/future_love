/*
 * jQuery accordion menu
 * @author Lee Daffen
 *
 * usage $(selector).accordionMenu({opts})
 *
 * @param opts (object) - object containing configuration options for the menu constructor
 *
 * @option speed (integer) - speed in ms of collapse/expand animation, default is 350
 * @option multipleOpen (boolean) - allow more than one submenu open at a time, default is false
 * @option writeCookie (boolean) - store the state of the menu in a cookie, default is true
 * @option cookieName (string) - name of the cookie, default is accordion_menu
 * @option cookieValid (integer) - validity period of the cookie in days, default is 30
 * @option cookiePath (string) - path to apply to the cookie, default is current page's relative path
 * @option beforeStart (function) - callback to execute before collapsing or expanding a menu list
 * @option afterEnd (function) - callback to execute after collapsing or expanding a menu list
 *
 */

(function($) {
    $.fn.accordionMenu = function(o) {
        o = $.extend({
            speed: 350,
            multipleOpen: false,
            writeCookie: false,
            cookieName: "accordion_menu",
            cookieValid: 30,
            cookiePath: "",
			afterEnd: null,
			beforeStart: null
        }, o || {});

        var cookieArr = [];

        function readCookie() {
			var _cID1=document.cookie.indexOf(o.cookieName);
			if(_cID1==-1) { return null; }

			var _cID2=document.cookie.indexOf("=",_cID1),
				_cID3=document.cookie.indexOf(";",_cID2);
			if (_cID3==-1) { _cID3=document.cookie.length; }

			var cookieVal = document.cookie.substring(_cID2+1,_cID3);
            cookieArr = cookieVal.split(",");
            return cookieArr;
        }

        function writeCookie() {
			var today = new Date(),
				cookieVal = "",
				cookieExp = new Date(today.setTime(today.getTime()+(o.cookieValid*24*60*60*1000))).toGMTString();		// format Sat, 1 Jan 2000 00:00:00 UTC

			cookieVal = cookieArr.join(",");
			document.cookie = o.cookieName + "=" + cookieVal + "; expires=" + cookieExp + "; path=" + o.cookiePath;
        }

        function setCookie(i, value) {
            if(i === "reset") {
                for(var ct=0; ct<cookieArr.length; ct++) {
                    cookieArr[ct] = false;
                }
            } else {
                cookieArr[i] = value;
                if(o.writeCookie) { writeCookie(); }
            }
        }

        var menuEl = this,
			$accordionEls = $(menuEl).find("li>span"),
			$accordionUls = $accordionEls.find("~ ul");

        $accordionUls.css("display","none");

        $accordionEls.parent("li").each(function(i, el) {
            var $thisEl = $(el);

            if($thisEl.find(":has(ul)")) {
                if(cookieArr[i] == "true" || $thisEl.hasClass("fixed") || $thisEl.hasClass("open")) {
					if($thisEl.hasClass("fixed")) {
						$thisEl.find("> ul").css("display","block");
					} else {
						$thisEl.find("> ul").css("display","block");
						$thisEl.addClass("open");
					}
                }
            }
        });

		$accordionEls.click(function(e) {
			if(o.beforeStart) o.beforeStart.call(this, this);

			var $eventTarget = $(e.target).parent(),
				$eventParentLi = $eventTarget.parent("li"),
				$targetUl = $eventTarget.find("~ ul"),
				$targetUlGroup = $eventTarget.parent().parent().find("> li > ul");

			if(!$eventTarget.parent().hasClass("fixed")) {
				e.preventDefault();

				if(o.multipleOpen) {
					if($eventParentLi.hasClass("open")) {
						$targetUl.slideUp(o.speed, function() {
							if(o.afterEnd) o.afterEnd.call(this, this);
						});
						$eventParentLi.removeClass("open");
					} else {
						$targetUl.slideDown(o.speed);
						$eventParentLi.addClass("open", function() {
							if(o.afterEnd) o.afterEnd.call(this, this);
						});
					}
				} else {
					if($eventParentLi.hasClass("open")) {
						$targetUl.slideUp(o.speed, function() {
							if(o.afterEnd) o.afterEnd.call(this, this);
						});
						$eventParentLi.removeClass("open");
					} else {
						$targetUlGroup.each(function(i, el) {
							var $thisUl = $(el);
							if(!$thisUl.parent("li").hasClass("fixed")) {
								$thisUl.slideUp(o.speed);
								$thisUl.parent("li").removeClass("open");
							}
						});
						$targetUl.slideDown(o.speed, function() {
							if(o.afterEnd) o.afterEnd.call(this, this);
						});
						$targetUl.parent("li").addClass("open");
					}
				}
			}
		});

        return menuEl;
    };
})(jQuery);
