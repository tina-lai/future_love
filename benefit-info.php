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
                    <li><a href="#">聯誼花絮></a></li>
                    <li><a href="#">甜蜜分享></a></li>
                    <li><a href="#">練練論壇></a></li>
                    <li><a href="#">戀戀好康></a></li>
                  </ul>
                </div> 
                
                <!-- 左欄內容-->
               	<?php include("include_left-col.php");?>
                <!-- end 左欄內容-->
                
          </div><!-- end  左邊欄位-->
            
            <div id="right-col">
            	<!--跑馬燈引入-->
            	<? include("include_Message.php"); ?>
                
                <h2 class="heading-purple">
                	御梅屋 – 月老媒
                </h2>
                <div class="heading-dashline"></div>
                
                <div class="meeting-info clearfix">
                	<div class="image"><img src="images/benefit.jpg" width="321" height="239"></div>
                    <div class="details">
                      <div class="row">
                        <div class="left font-orange">‧ 服務類型：</div>
                        <div class="right">食品類</div>
                      </div>
                      <div class="row">
                        <div class="left font-orange">‧ 行動電話：</div>
                        <div class="right">0800-588-898</div>
                      </div>
                      <div class="row">
                        <div class="left font-orange">‧ 聯絡電話：</div>
                        <div class="right">0800-588-898</div>
                      </div>
                      <div class="row">
                        <div class="left font-orange">‧ 傳真號碼：</div>
                        <div class="right">0800-588-898</div>
                      </div>
                      <div class="row">
                        <div class="left font-orange">‧ 地址：</div>
                        <div class="right">台北市中山區南京西路</div>
                      </div>
                      <div class="row">
                        <div class="left font-orange">‧ 相關網址：</div>
                        <div class="right"><a href="#" class="font-purple">http://www.pcstore.com.tw/hoyajt</a></div>
                      </div>
                    </div>
                </div>
                
                <div class="page-content benefit">
                  <div class="about_setup" style="float:none">
                    <h3>>> 相關優惠</h3>
                    <p>凡月老銀行會員至「http://www.pcstore.com.tw/hoyajt/」購買月老媒或不老梅產品，在填寫購物資料頁面的註明「月老銀行VIP及帳號」，御梅屋將贈送月老媒試飲品1瓶，名額有限，送完為止。</p>
                  </div>

                  <div class="about_setup" style="float:none">
                	   <h3>>> 優惠特色</h3>
                    
                    <p>遵循古法精釀10年，與義大利陳年橡木桶果醋交織出卓越口感，適合沖泡成飲品、搭配醋酒或當入菜沾醬，皆具有促進新陳代謝，提升免疫力，延緩老化等效果。禮盒內附台灣最著名月老廟，霞海城隍廟過香火之紅線，期許天下有緣人男女同心，千里姻緣一線牽，健康安樂一萬年。</p>
                  </div>

                  <div class="dashline"></div>
                  <a href="#" class="font-purple" style="float:left;margin-top:10px;">回上頁</a>
                	
                </div><!-- end page content-->
                
                            
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
