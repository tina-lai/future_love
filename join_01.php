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
        
        	<div class="banner" style="width:940px; height:300px;">
       	    	<img src="images/banner.jpg"> 
            </div>
        	
            
            <!-- 左邊欄位-->
            <div id="left-col">
                
                <!-- 左欄內容-->
               	<?php include("include_left-col.php");?>
                <!-- end 左欄內容-->
                
          </div><!-- end  左邊欄位-->
            
            <div id="right-col">
            	<div class="text-slider">
           	    	<img src="images/icon-logo-purple.png" width="18" height="16"> 
                    <span class="font-red">10/05  新竹地區 戶外聯誼   </span>
                    <span class="font-blue">☆ 企業聯誼☆  戀戀香草幸福出遊-戶外之旅，目前男性報名資料.   >小帆25 歲 / 桃園縣 </span>  
                </div>
                <div class="about_square">
                        <h2 class="heading-pink">
                        成立宗旨
                        </h2>
                    <div class="heading-dashline"></div>
                    <div class="top-selection clearfix">
                	<div class="selection-category">項目 ｜</div>
                    <ul class="clearfix">
                    	<li><a href="#">入會流程</a></li>
                        <li><a href="#">線上排約流程</a></li>
                        <li><a href="#">報名繳費</a></li>
                    </ul>
                </div>
                <div class="dashline"></div>
                        <div class="join_square">
           					<img src="images/flow_1.png">
                        </div>
                        <div class="join_square">
           					<img src="images/flow_2.png">
                        </div>
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
