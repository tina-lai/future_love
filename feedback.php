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
        	<!--banner圖引入-->
        	<?php //include("include_banner.php");?> 
        	
            
            <!-- 左邊欄位-->
            <div id="left-col">

                <div class="submenu">
                  <ul>
                    <li><a href="#">成立宗旨></a></li>
                    <li><a href="#">戀戀團隊></a></li>
                    <li><a href="#">公益回饋></a></li>
                  </ul>
                </div>
                
                <!-- 左欄內容-->
               	<?php include("include_left-col.php");?>
                <!-- end 左欄內容-->
                
          </div><!-- end  左邊欄位-->
            
            <div id="right-col">
            	<!--跑馬燈引入-->
            	<? include("include_Message.php"); ?>
                <div class="about_square">
                        <h2 class="heading-pink">
                        公益回饋
                          <div class="breadcrumb">首頁 > 認識本站 > 公益回饋</div>
                        </h2>
                    <div class="heading-dashline"></div>
                    <div class="about_setup" style="float:none;padding-top:10px;">
                    <p>創立之初，夥伴們即決定以未婚聯誼活動之部分盈餘來回饋社會，目前公益回饋的對象設定為國、內外弱勢兒童、受虐婦女及有關兩性福祉的團體，希望藉由這個小小的舉動，可以達到拋磚引玉的效果，也間接鼓勵戀戀未來把聯誼活動辦好的決心，除了擔任稱職的月下老人，速配更多的佳偶，還可以幫助更多弱勢團體。未來隨著公司盈餘的提昇，也將提高聯誼活動盈餘比率來回饋社會。</p>
                    <p>本站目前透過世界展望會已認養國外孩童1名，她的名字叫Nana，未來不定期會分享她的成長喜悅；並於家扶基金會助養國內孩童1名，戀戀未來希望造福台灣的單身朋友之餘，更希望多進一份心力，改善窮困孩童的環境，讓世界未來的主人翁可以快樂成長。雖然我們的力量不大，但和我們一樣喜歡世界和平的您，一起和戀戀未來努力，期待讓世界更美好！！</p></div>
                    
                    <div class="tab-style01">
                    <div id="index_information">
                        <div class="index_tab_select clearfix" class="navcontainer">
                            <ul class="tabs">
                                <li><a href="#">2013</a></li>
                                <li><a href="#">2012</a></li>
                                <li><a href="#">2011</a></li>
                                <li><a href="#">2010</a></li>
                            </ul>
                        </div>
                        <div>
                        <!-- tab "panes" -->
                        <div class="panes p-info">

                            <!-- 2013 tab -->
                            <div class="clearfix">

                             2013

                            </div>
                            <!--end 2013 tab -->

                            <!-- 2012 tab -->
                            <div class="clearfix">

                              2012

                            </div>
                            <!-- end 2012 tab -->

                            <!-- 2011 tab -->
                            <div class="clearfix">
                              2011
                            </div>
                            <!-- end 2011 -->

                            <!-- 2010 tab -->
                            <div class="clearfix">
                              2010
                            </div>
                            <!-- end 2010 -->
                            
                        </div>
                        <!-- end panes-->
                        </div>
                    </div>
                    <!-- end information-->
                </div>
                <!-- end tab -->


                    
                    <!--
                    <div class="top-selection clearfix">
                	<div class="selection-category">項目 ｜</div>
                    <ul class="clearfix">
                    	<li><a href="join_01.php">入會流程</a></li>
                        <li><a href="join_02.php">線上排約流程</a></li>
                        <li><a href="join_03.php">報名繳費</a></li>
                    </ul>
                </div>
                -->
                <!--
                
                <div class="dashline"></div>
                        <div class="join_square">
           					<img src="images/flow_1.png">
                        </div>
                        <div class="join_square">
           					<img src="images/flow_2.png">
                        </div>
                -->        
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
