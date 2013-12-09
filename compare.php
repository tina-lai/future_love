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
                    <li><a href="#">線上交友></a></li>
                    <li><a href="#">客制相親></a></li>
                    <li><a href="#">相親指南></a></li>
                    <li><a href="#">相親問答></a></li>
                    <li><a href="#">服務比較></a></li>
                    <li><a href="#">排約據點></a></li>
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
                        服務比較
                          <div class="breadcrumb">首頁 > 相親排約 > 服務比較</div>
                        </h2>
                    <div class="heading-dashline"></div>

                    <h3>>>一般搜尋</h3>

                    <div class="css-table-1">
                      <div class="css_tr">
                          <div class="css_td">標題</div>
                          <div class="css_td">回應</div>
                          <div class="css_td">日期</div>
                      </div>
                      <div class="css_tr">
                          <div class="css_td">如何停用WordPress內建搜尋功能？</div>
                          <div class="css_td">5</div>
                          <div class="css_td">2011-10-30</div>
                      </div>
                    </div>
    
                </div>
                <!-- end page content-->
                            
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
