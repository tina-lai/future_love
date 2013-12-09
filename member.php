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
                
                <div class="block member-sec">
                  <div class="header">
                    <h2><img src="images/icon-logo-purple.png" width="18" height="16">會員專區</h2>
                    <a class="more" href="topics/index.html">more</a>
                  </div>
                    <ul class="news-list">
                      阿凱您好，歡迎登錄會員專區  
                      <li><a href="#"><img src="images/member-icon-01.jpg">瀏覽個人資料</a></li>
                      <li><a href="#"><img src="images/member-icon-02.jpg">活動記錄 / 繳費回報</a></li>
                      <li><a href="#"><img src="images/member-icon-03.jpg">報名團體聯誼</a></li>
                      <li><a href="#"><img src="images/member-icon-04.jpg">報名一對一排約</a></li>
                      <li><a href="#"><img src="images/member-icon-05.jpg">修改個人資料</a></li>
                      <li><a href="#"><img src="images/member-icon-06.jpg">修改密碼</a></li>
                      <li><a href="#"><img src="images/member-icon-07.jpg">登出</a></li>
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
                	會員資料
                    <div class="breadcrumb">首頁 > 戀戀園地 > 戀戀論壇</div>
                </h2>
                <div class="dashline"></div>

                <div id="member_info">
                    <div id="index_information">
                        <div class="index_tab_select clearfix" class="navcontainer">
                            <ul class="tabs">
                                <li><a href="#">修改基本資料</a></li>
                                <li><a href="#">修改排約資料</a></li>
                            </ul>
                        </div>
                        <div>
                        <!-- tab "panes" -->
                        <div class="panes p-info">
                            <!-- 修改基本資料 tab -->
                            <div class="clearfix">
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
                            
                            </div>
                            <!--end 修改資料 tab -->
                            
                            <!-- 修改排約資料 tab -->
                            <div class="clearfix">
                                <table class="table01" width="100%" cellspacing="2" cellpadding="2">
                                  <tr>
                                    <td width="150" class="bg-pink text-right">排約狀態：</td>
                                    <td> 無</td>
                                    <td class="bg-pink text-right">素食：</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">宗教信仰：</td>
                                    <td></td>
                                    <td class="bg-pink text-right">年薪：</td>
                                    <td>1232546563413</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">房契：</td>
                                    <td>男</td>
                                    <td class="bg-pink text-right">存款：</td>
                                    <td>74/1/1</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">Facebook：</td>
                                    <td>未婚</td>
                                    <td class="bg-pink text-right">對象的婚姻：</td>
                                    <td>176 cm</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">對象年次：</td>
                                    <td>台南</td>
                                    <td class="bg-pink text-right">對象學歷：</td>
                                    <td>70 kg</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">個人特質：</td>
                                    <td>大學</td>
                                    <td class="bg-pink text-right">畢業學校：</td>
                                    <td>樹德科技大學</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">個人興趣：</td>
                                    <td>業務兼程式設計師</td>
                                    <td class="bg-pink text-right">星座：</td>
                                    <td>牡羊座</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">吸引人的部分：</td>
                                    <td>0910111111</td>
                                    <td class="bg-pink text-right">電信業者：</td>
                                    <td>中華</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">理想的對象：</td>
                                    <td>kai@kai.com.tw</td>
                                    <td class="bg-pink text-right">帳號5碼：</td>
                                    <td>12435</td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">忌諱的對象：</td>
                                    <td>是</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">可排約時間：</td>
                                    <td >否</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">可排約地點：</td>
                                    <td>是</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td class="bg-pink text-right">自我介紹：</td>
                                    <td colspan="3">是</td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                </table>
                            
                            </div>
                            <!--end 修改排約資料 tab -->

                        </div>
                        <!-- end panes-->
                        </div>
                    </div>
                    <!-- end information-->
                </div>
                <!-- end tab -->
                            
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
