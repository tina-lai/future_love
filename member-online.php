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
                
                <!-- 會員選單-->
                <?php include("include_member-menu.php");?>
                <!-- end 會員選單-->
               
                <!-- 左欄內容-->
               	<?php include("include_left-col.php");?>
                <!-- end 左欄內容-->
                
          </div><!-- end  左邊欄位-->
            
            <div id="right-col">
            	<!--跑馬燈引入-->
            	<? include("include_Message.php"); ?>
                
                <h2 class="heading-purple">
                	線上排約
                    <div class="breadcrumb">首頁 > 會員專區 > 線上排約</div>
                </h2>
                <div class="dashline"></div>

                <div id="member_info">
                    <div id="index_information">
                        <div class="index_tab_select clearfix" class="navcontainer">
                            <ul class="tabs">
                                <li id="member-info-01"><a href="#">邀約記錄</a></li>
                                <li id="member-info-02"><a href="#">被約紀錄</a></li>
                                <li id="member-info-02"><a href="#">追蹤名單</a></li>
                                <li id="member-info-02"><a href="#">線上繳費</a></li>
                            </ul>
                        </div>
                        <div>
                        <!-- tab "panes" -->
                        <div class="panes p-info">
                            <!-- 邀約記錄 tab -->
                            <div class="clearfix">
                                <table width="665" border="0" cellspacing="0" cellpadding="0" class="table-style-1">
                                  <thead>
                                    <tr>
                                      <td width="140">邀約時間<span class="right-line"></span></td>
                                      <td width="60">對象<span class="right-line"></span></td>
                                      <td width="60">回覆結果<span class="right-line"></span></td>
                                      <td width="60">時間<span class="right-line"></span></td>
                                      <td width="60">地點<span class="right-line"></span></td>
                                      <td width="80">管理員回覆</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="tr-item">
                                      <td style="padding-left:20px"><span class="font-purple">2012/12/12 14:00</span></td>
                                      <td>小美</td>
                                      <td>同意邀約</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td colspan="6">
                                          <div class="dashline"></div>
                                      </td>
                                    </tr>
                                    <tr class="tr-item">
                                      <td style="padding-left:20px"><span class="font-purple">2012/12/12 14:00</span></td>
                                      <td>小美</td>
                                      <td>同意邀約</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td colspan="6">
                                          <div class="dashline"></div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                
                                <div class="pagenav">
                                  « 上一頁     
                                  <a class="current" href="#">1</a>
                                  <a href="#">2</a> 
                                  <a href="#">3</a> 
                                  <a href="#">4</a> 
                                  <a href="#">5</a> 
                                  <a href="#">6</a> 
                                  <a href="#">7</a> 
                                  <a href="#">8</a> 
                                  <a href="#">9</a> 
                                  <a href="#">10</a> 
                                  <a href="#">下一頁 »</a>      
                              </div>

                            </div>
                            <!--end 邀約記錄 tab -->
                            
                            <!-- 被約記錄 tab -->
                            <div class="clearfix">

                              <table width="665" border="0" cellspacing="0" cellpadding="0" class="table-style-1">
                                  <thead>
                                    <tr>
                                      <td width="140">邀約時間<span class="right-line"></span></td>
                                      <td width="60">對象<span class="right-line"></span></td>
                                      <td width="60">回覆結果<span class="right-line"></span></td>
                                      <td width="60">時間<span class="right-line"></span></td>
                                      <td width="60">地點<span class="right-line"></span></td>
                                      <td width="80">管理員回覆</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="tr-item">
                                      <td style="padding-left:20px"><span class="font-purple">2012/12/12 14:00</span></td>
                                      <td>小美</td>
                                      <td>同意邀約</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td colspan="6">
                                          <div class="dashline"></div>
                                      </td>
                                    </tr>
                                    <tr class="tr-item">
                                      <td style="padding-left:20px"><span class="font-purple">2012/12/12 14:00</span></td>
                                      <td>小美</td>
                                      <td>同意邀約</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td colspan="6">
                                          <div class="dashline"></div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>

                                <div class="pagenav">
                                  « 上一頁     
                                  <a class="current" href="#">1</a>
                                  <a href="#">2</a> 
                                  <a href="#">3</a> 
                                  <a href="#">4</a> 
                                  <a href="#">5</a> 
                                  <a href="#">6</a> 
                                  <a href="#">7</a> 
                                  <a href="#">8</a> 
                                  <a href="#">9</a> 
                                  <a href="#">10</a> 
                                  <a href="#">下一頁 »</a>      
                              </div>
                            
                            </div>
                            <!--end 被約記錄 tab -->

                            <!-- 追蹤名單 tab -->
                            <div class="clearfix">
                              <div class="p-mem" style="float:left;">
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
                              <div class="pagenav" style="margin-top:50px;">
                                  « 上一頁     
                                  <a class="current" href="#">1</a>
                                  <a href="#">2</a> 
                                  <a href="#">3</a> 
                                  <a href="#">4</a> 
                                  <a href="#">5</a> 
                                  <a href="#">6</a> 
                                  <a href="#">7</a> 
                                  <a href="#">8</a> 
                                  <a href="#">9</a> 
                                  <a href="#">10</a> 
                                  <a href="#">下一頁 »</a>      
                              </div>
                            </div>
                            <!-- end 追蹤名單 tab -->

                            <!-- 線上繳費 tab -->
                            <div class="clearfix">

                              <table width="665" border="0" cellspacing="0" cellpadding="0" class="table-style-1">
                                  <thead>
                                    <tr>
                                      <td width="140">活動日期及主題<span class="right-line"></span></td>
                                      <td width="60">同行朋友<span class="right-line"></span></td>
                                      <td width="60">繳費<span class="right-line"></span></td>
                                      <td width="60">後5碼<span class="right-line"></span></td>
                                      <td width="60">本站<br>處理進度<span class="right-line" style="position:relative; top: -8px"></span></td>
                                      <td width="80">同行朋友<br>繳費回報<span class="right-line" style="position:relative; top: -8px"></span></td>
                                      <td width="80">配對通知<span class="right-line"></span></td>
                                      <td width="80">信用卡<br>ATM付款</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="tr-item">
                                      <td style="padding-left:20px"><span class="font-purple">2013/12/07(六) 中部戶外☆戀戀香草.幸福出遊</span></td>
                                      <td>小美</td>
                                      <td>已完成</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td colspan="8">
                                          <div class="dashline"></div>
                                      </td>
                                    </tr>
                                    <tr class="tr-item">
                                      <td style="padding-left:20px"><span class="font-purple">2013/12/07(六) 中部戶外☆戀戀香草.幸福出遊</span></td>
                                      <td>小美</td>
                                      <td>已完成</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td colspan="8">
                                          <div class="dashline"></div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>

                            </div>
                            <!-- end 線上繳費 tab -->
                            
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
