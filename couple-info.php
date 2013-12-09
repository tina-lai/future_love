<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>戀戀未來</title>

    
    <link href="css/normalize.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/layout.css" rel="stylesheet">
    <link href="css/tabs.css" rel="stylesheet">

    <!-- HTML5 shim and IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
    <![endif]-->
    
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!--跑馬燈_start-->    
<!--需使用http://code.jquery.com/jquery-latest.min.js-->
<link media="screen" rel="stylesheet" type="text/css" href="css/latest.css" />
<script type="text/javascript" src="js/banner_text.js"></script>
<!--跑馬燈_end-->  
 
<!--banner_start-->
<!--需使用http://code.jquery.com/jquery-latest.min.js-->
<link media="screen" rel="stylesheet" type="text/css" href="css/banner_slider.css" />
<script type="text/javascript" src="js/banner_slider.js"></script>
<!--banner_end-->    
   
  </head>

<body>
    
<!-- include header -->	
 <?php include("include_header.php");?>
 
	
    <section class="wrapper clearfix">
    	
        <div class="since"><img src="images/since.png"></div>
        
        <!-- 右方搜尋-->
		 <?php include("include_right_search.php");?>
        <!-- end 右方搜尋-->
        
       <div id="content" class="clearfix">
        	<!--<div id="abgneBlock" class="banner" style="width:940px; height:300px;">
       	    	<ul class="list">
			       <li><a target="_blank" href="#"><img src="images/banner.jpg"></a></li>
			       <li><a target="_blank" href="#"><img src="images/banner.jpg"></a></li>
			       <li><a target="_blank" href="#"><img src="images/banner.jpg"></a></li>
			       <li><a target="_blank" href="#"><img src="images/banner.jpg"></a></li>
			       <li><a target="_blank" href="#"><img src="images/banner.jpg"></a></li>
		       </ul>
            </div>-->
        	
            
            <!-- 左邊欄位-->
            <div id="left-col">

                <div class="submenu">
                  <ul>
                    <li><a href="#">聯誼花絮></a></li>
                    <li><a href="#">甜蜜分享></a></li>
                    <li><a href="#">練練論壇></a></li>
                    <li><a href="#">練練好康></a></li>
                  </ul>
                </div>
                
                <!-- 左欄內容-->
               	<?php include("include_left-col.php");?>
                <!-- end 左欄內容-->
                
          </div><!-- end  左邊欄位-->
            
            <div id="right-col">
            	<!--跑馬燈引入-->
            	<? include("include_Message.php"); ?>
                <div class="page-content">
                        <h2 class="heading-pink">
                        甜蜜分享
                            <div class="breadcrumb">首頁 > 戀戀園地 > 甜蜜分享</div>
                        </h2>
                        <div class="dashline"></div>

                        <h3>恭喜103/01/19新竹新人步入紅毯</h3>
                        <div class="about_setup clearfix" style="float:none;padding-bottom:10px;">
                        
                            <p>以下是參加本站活動熱情的會員，稍來幸福消息~~</p>

<p>我是2012/9/2號參加活動的羅民聘<br>
我和當初3號女孩子林素宇配對成功<br>    將於2014/1/19完婚</p>

<p>有值得分享的心得喔~~<br>
主要是給男孩子吧<br>
因為我記得那天活動結束，有個男孩子在活動的討論裡面說到<br>
主持人都沒有幫忙引薦或是講一些東西，他會不知道怎麼聊天<br>
但是這本來就是要主動show出自己的地方<br>
平常應該是要多增加自己興趣，多看多閱讀，多聽，才能夠與別人有相同話題</p>

<p>至於對女性的話<br>
就是不一定要等男生主動<br>
自己喜歡也要勇敢追求<br>
而且有的好男人不是只有當天活動可以感覺出來<br>
有的男人的好應該是活動結束之後慢慢聊天，才能夠發掘的</p>
<img src="images/couple.png">
                        </div>
                        <div class="dashline" style="margin-bottom:20px;"></div>
                        <a href="#" class="font-purple">回上層</a>
                </div>
              
                            
            </div><!-- end 右邊欄位 right col-->
        </div>
    	
    </section>
    
    <!-- include footer-->
    <?php include("include_footer.php");?>
    <!-- end footer-->
    
    <!-- include scripts-->
    <?php include("include_scripts.php");?>
    <!-- end scripts-->




</body>
</html>
