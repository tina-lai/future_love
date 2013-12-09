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
                
                <!-- 左欄內容-->
               	<?php include("include_left-col.php");?>
                <!-- end 左欄內容-->
                
          </div><!-- end  左邊欄位-->
            
            <div id="right-col">
            	<!--跑馬燈引入-->
            	<? include("include_Message.php"); ?>
                
                <h2 class="heading-purple">
                	留言板
                    <div class="breadcrumb">首頁 > 聯絡我們 > 留言板</div>
                </h2>
                <div class="heading-dashline"></div>
                
                <div class="page-description">
                	<p class="font-grey">如果您是本站會員，請先登入會員後再留言喔! 留言版為公開狀態， 如果留言內容涉及隱私，請來信futurelove520@gmail.com 本站於收到您的留言或來信後，將會儘速回覆</p>
                    <button class="btn-purple" style="margin-bottom:10px;">回上層</button>
				</div>
                <div class="dashline"></div>

                <div class="page-content">
                    
                    <div class="forum">
                    	

                      <div class="post-reply">
                        <div class="header">
                            <h2><img src="images/icon-logo-purple.png" width="18" height="16">回應文章<img src="images/icon-logo-purple.png" width="18" height="16"></h2>
                        </div>
                        <div class="content clearfix">
                            <div class="dashline"></div>
                            <p><span>暱稱：</span><input type="text"></p>
                            <p><span>Email：</span><input type="text"><font color="#666">必填欄位，不公開</font></p>
                            <p><span>標題：</span><input type="text"><font color="#666">17字內</font></p>
                            <span>內容：</span>
                            <textarea></textarea>
                            <div class="btns">
                                <button class="btn-pink">送出</button>
                                <button class="btn-purple">清除</button>
                            </div>
                        </div>
                      </div>


                    </div><!-- end forum-->
                
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
