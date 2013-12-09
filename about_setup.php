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
                        成立宗旨
                            <div class="breadcrumb">首頁 > 認識本站 > 成立宗旨</div>
                        </h2>
                        <div class="dashline"></div>
                        <div class="about_setup">
                        本站發起人Jack原是一位未婚男士，因工作時間長再加上職場環境缺乏認識異性機會，因此曾積極參加坊間未婚聯誼活動，增加交友機會。但數次聯誼經驗後發現，部分採會員制之婚友社、專辦配對相親者收費過高，而收費門檻低的聯誼活動內容較生硬無趣，未能合乎預期效果。於是與志同道合的伙伴共同創立了【戀戀未來】，定期舉辦各式優質室內.外聯誼活動，希望藉由戀戀未來的平臺，造福更多單身男女，緣定未來。             
                        </div>
                </div><br><br>
              <div class="about_square">
                        <h2 class="heading-pink">
                        目標展望
                        </h2>
                        <div class="dashline"></div>
                        <div class="about_setup">
                          戀戀未來自2009年成立，目前在全省各主要縣市，圴定時舉辦各類不同主題型式之活動，包括：<u>百萬菁英</u>、<u>科技新貴</u>、<u>公教國營</u>、<u>碩博之夜</u>、公益聯誼、<u>晚婚二春</u>、<u>k</u><u>歌情緣</u>、<u>戶外一日遊等</u>，未來將推出二天一夜微旅行方案，以及國外旅遊等…。<br>
                            因應不同區域特色，我們設計了相當多元的內容可供選擇。</p>
                          <p>健康交友、安全把關、專業團隊是我們堅持的目標！</p>
                          <p>一切的努力，只為了讓您在「戀戀未來，遇見未來」…..。</p>
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
