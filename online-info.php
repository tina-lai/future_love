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
                        線上交友
                          <div class="breadcrumb">首頁 > 相親排約 > 線上交友</div>
                        </h2>
                    <div class="heading-dashline"></div>

                    <a href="#" class="font-purple" style="text-decoration:underline; margin: 15px 0 0 10px; padding-bottom:20px;">回上頁</a>

                    <div class="dashline" style="margin-top:15px;"></div>

                    
                        <table class="table01" width="100%" cellspacing="2" cellpadding="2">
                                  <tr>
                                    <td width="150" class="bg-pink text-right">照片：</td>
                                    <td><img src="images/kai-profile.jpg"></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">暱稱：</td>
                                    <td>阿凱</td>
                                    <td class="bg-pink">帳號：</td>
                                    <td>1232546563413</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">性別：</td>
                                    <td>男</td>
                                    <td class="bg-pink">生日：</td>
                                    <td>74/1/1</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">婚姻：</td>
                                    <td>未婚</td>
                                    <td class="bg-pink">身高：</td>
                                    <td>176 cm</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">居住地：</td>
                                    <td>台南</td>
                                    <td class="bg-pink">體重：</td>
                                    <td>70 kg</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">學歷：</td>
                                    <td>大學</td>
                                    <td class="bg-pink">畢業學校：</td>
                                    <td>樹德科技大學</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">職業：</td>
                                    <td>業務兼程式設計師</td>
                                    <td class="bg-pink">星座：</td>
                                    <td>牡羊座</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">電話：</td>
                                    <td>0910111111</td>
                                    <td class="bg-pink">電信業者：</td>
                                    <td>中華</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">Email：</td>
                                    <td>kai@kai.com.tw</td>
                                    <td class="bg-pink">帳號5碼：</td>
                                    <td>12435</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">公開email：</td>
                                    <td>是</td>
                                    <td class="bg-pink">註冊日期：</td>
                                    <td>102/2/2</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">身份驗證：</td>
                                    <td colspan="3">否</td>
                                  </tr>
                              </table>
                              <div class="dashline"></div>

                              <div align="center" style="margin-top:20px;">
                                  <button class="btn-purple">我要邀約</button>
                                  <button class="btn-purple" style="width:100px;">加入追蹤名單</button>
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
