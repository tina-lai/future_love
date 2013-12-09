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

                    <h3>>>一般搜尋</h3>

                    <table class="table01" width="100%" cellspacing="2" cellpadding="2">
                      <tr>
                        <td width="150" class="bg-purple text-right">照片：</td>
                        <td class="bg-blue"><input type="radio"> 有 <input type="radio"> 無</td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">性別：</td>
                        <td class="bg-blue"><input type="radio"> 男 <input type="radio"> 女</td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">年次：</td>
                        <td class="bg-blue"><select><option>民國</option></select> ~ <select><option>民國</option></select></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">居住縣市：</td>
                        <td class="bg-blue"><select><option>請選擇縣市</option></select></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">學歷：</td>
                        <td class="bg-blue"><input type="radio"> 國中 <input type="radio"> 高中職 <input type="radio"> 專科 <input type="radio"> 大學 <input type="radio"> 碩士 <input type="radio"> 博士</td>
                      </tr>
                    </table>

                    <div style="width:100%; margin: 10px 0; text-align:center;">
                        <button class="btn-purple">搜尋</button>
                        <button class="btn-pink">進階搜尋</button>
                    </div>


                    <div class="dashline"></div>

                    <div id="index_mem" style="margin-top:30px;">
                    <div class="header">
                        <h2><img src="images/icon-logo-purple.png" width="18" height="16">精選會員</h2>
                    </div>
                    <div id="index_information">
                        <div class="index_tab_select clearfix" class="navcontainer">
                            <ul class="tabs">
                                <li id="fpop"><a href="#">女性人氣會員</a></li>
                                <li id="mpop"><a href="#">男性人氣會員</a></li>
                                <li id="fnew"><a href="#">女性新進會員</a></li>
                                <li id="mnew"><a href="#">男性新進會員</a></li>
                            </ul>
                        </div>
                        <div>
                        <!-- tab "panes" -->
                        <div class="panes p-mem">
                            <!-- 女性人氣會員 tab -->
                            <div class="clearfix">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/member.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/member.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/member.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/member.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/member.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                </ul>
                            <div style="float:right;">more...</div>
                            </div>
                            <!--end 女性人氣會員 tab -->
                            
                            <!-- 男性人氣會員 tab -->
                            <div class="clearfix">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/memberm.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/memberm.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/memberm.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/memberm.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/memberm.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                </ul>
                            </div>
                            <!--end 男性人氣會員 tab -->
                            
                            <!-- 女性新進會員 tab -->
                            <div class="clearfix">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/member.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/member.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/member.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/member.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/member.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                </ul>
                            </div>
                            <!--end 女性新進會員 tab -->
                            
                            <!-- 男性新進會員 tab -->
                            <div class="clearfix">
                                <ul>
                                    <li>
                                        <a href="#"><img src="images/memberm.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/memberm.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/memberm.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/memberm.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/memberm.jpg" width="100" height="100" class="image"></a>
                                        <div class="font-purple">小帆</div>
                                        <div class="font-grey">25 歲 / 桃園縣  </div>
                                    </li>
                                </ul>
                            <div style="float:right;">more...</div>
                            </div>
                            <!--end 男性新進會員 tab -->
                        </div>
                        <!-- end panes-->
                        </div>
                    </div>
                    <!-- end information-->
                </div>
                <!-- end 精選會員 -->
                
    
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
