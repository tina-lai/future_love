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
        	<div id="abgneBlock" class="banner" style="width:940px; height:300px;">
       	    	<ul class="list">
			       <li><a target="_blank" href="#"><img src="images/banner.jpg"></a></li>
			       <li><a target="_blank" href="#"><img src="images/banner.jpg"></a></li>
			       <li><a target="_blank" href="#"><img src="images/banner.jpg"></a></li>
			       <li><a target="_blank" href="#"><img src="images/banner.jpg"></a></li>
			       <li><a target="_blank" href="#"><img src="images/banner.jpg"></a></li>
		       </ul>
            </div>
        	
            
            <!-- 左邊欄位-->
            <div id="left-col">
                
                <!-- 左欄內容-->
               	<?php include("include_left-col.php");?>
                <!-- end 左欄內容-->
                
          </div><!-- end  左邊欄位-->
            
            <div id="right-col">
            	<div id="abgne_marquee" class="text-slider">
                <img src="images/icon-logo-purple.png" width="18" height="16">
                <!--
                    <span class="font-red">10/05  新竹地區 戶外聯誼   </span>
                    <span class="font-blue">☆ 企業聯誼☆  戀戀香草幸福出遊-戶外之旅，目前男性報名資料.   >小帆25 歲 / 桃園縣 </span>   
                    -->
                    <ul>                          
                       <li> <a href="#">☆ 企業聯誼☆  戀戀香草幸福出遊-戶外之旅，目前男性報名資料.   >小帆25 歲 / 桃園縣 </a></li>
                       <li><a href="#">☆ 企業聯誼☆  戀戀香草幸福出遊-戶外之旅，目前男性報名資料.   >小帆25 歲 / 桃園縣 </a></li>
                    </ul>
                  </div>    
                
                <h2 class="heading-pink">
                	進階搜尋
                    <div class="breadcrumb">首頁 > 進階搜尋</div>
                </h2>
                <div class="dashline"></div>

                <div class="page-content">

                    <p>請注意:<br/ >
                 1.填寫排約資料前，請先詳閱一對一排約規則，<a href='../soulmat.php'>點此進入一對一排約說明</a><br />
                 2.詳細填寫以下資料送出，即線上報名排約成功，本站排約專員會於1週內主動與您聯繫。</p>

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
                        <td width="150" class="bg-purple text-right">排約狀態：</th>
                        <td class="bg-blue"><input  name="Love_Account_dateopen" type="radio" id="radio" value="Y" />
                          開啟
                          <label for="Love_Account_dateopen"></label>
                          <input  name="Love_Account_dateopen" type="radio" id="radio2" value="N" />
                          <label for="Love_Account_dateopen">暫時關閉</label></td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">個人照片：</th>
                        <td class="bg-blue"><table>
                          <tr>
                            <td colspan="2"><img src="../images/profile/b_f7e9050c92a851b0016442ab604b0488.jpg?t=1386173457"></td>
                            <td rowspan="2" valign="middle"><div style="padding-bottom:8px">照片狀態:</div>
                              <input type="radio" name="Love_Account_photo" value="yes" checked> 照片公開 <input type="radio" name="Love_Account_photo" value="lock" > 照片隱藏中                        <br />
                              <br />
                              <b>可上傳3張照片(第1張為站內大頭照)</b>
                              <div style="padding:15px 0px 0px 0px">照片1:
                                <input type="file"  name="my_photo[]">
                              </div>
                              <div style="padding:15px 0px 0px 0px">照片2:
                                <input type="file"  name="my_photo[]">
                              </div>
                              <div style="padding:15px 0px 0px 0px">照片3:
                                <input type="file"  name="my_photo[]">
                              </div>
                              <div style="padding-top:15px"><font color="#666666" size="-2">上傳照片格式：jpg,gif,png檔<br />
                                上傳照片大小：2M以內(上傳照片時間較久，請耐心等候)</font></div></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">素食：</th>
                        <td class="bg-blue"><input  name="Love_Account_food" type="radio" id="radio3" value="Y" />
                          是
                          <label for="radio3"></label>
                          <input  name="Love_Account_food" type="radio" id="radio4" value="N" />
                          否</td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">宗教信仰：</th>
                        <td class="bg-blue"><input  type="radio" value="0" name="Love_Account_fath" />
                          無
                          <input  type="radio" value="1" name="Love_Account_fath" />
                          佛教
                          <input  type="radio" value="2" name="Love_Account_fath" />
                          道教
                          <input  type="radio" value="3" name="Love_Account_fath" />
                          基督教
                          <input  type="radio" value="4" name="Love_Account_fath" />
                          天主教
                          <input  type="radio" value="5" name="Love_Account_fath" />
                          回教
                          <input  type="radio" value="6" name="Love_Account_fath" />
                          其它</td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">年薪：</th>
                        <td class="bg-blue"><label for="Love_Account_yeartotal"></label>
                          <select name="Love_Account_yeartotal" id="Love_Account_yeartotal">
                            <option value="" selected="selected">請選擇</option>
                            <option value="0.8" >30萬以內</option>
                            <option value="0.9" >30萬~40萬</option>
                            <option value="1" >40萬~50萬</option>
                            <option value="1.1" >50萬~60萬</option>
                            <option value="1.2" >60萬~70萬</option>
                            <option value="1.3" >70萬~80萬</option>
                            <option value="1.4" >80萬~90萬</option>
                            <option value="1.5" >90萬~100萬</option>  
                            <option value="3" >100萬~200萬</option>
                            <option value="4" >200萬~400萬</option>
                            <option value="5" >400萬~700萬</option>
                            <option value="6" >700萬~1000萬</option>
                            <option value="7" >1000萬以上</option>
                          </select></td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">房契：</th>
                        <td class="bg-blue">
                        <select name="Love_Account_house" id="Love_Account_house">
                            <option value="" selected="selected">請選擇</option>
                            <option value="1" >自有(無貸款)</option>
                            <option value="2" >自有(有貸款)</option>
                            <option value="2.1" >父母或家人持有</option>
                            <option value="2.2" >與他人共同持有</option>
                            <option value="3" >租賃</option>
                            <option value="3.1" >其它</option>
                            
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">存款：</th>
                        <td class="bg-blue"><select name="Love_Account_selftotal" id="Love_Account_selftotal">
                          <option value="" selected="selected" selected="selected">請選擇</option>
                          <option value="0.5" >負債</option>
                          <option value="0.6" >無存款</option>
                          <option value="0.7" >30萬以內</option>
                          <option value="0.8" >30萬~50萬</option>
                          <option value="1" >50萬~100萬</option>
                          <option value="2" >100~300萬</option>
                          <option value="3" >300~500萬</option>
                          <option value="4" >500萬~1000萬</option>
                          <option value="5" >1000萬~3000萬</option>
                          <option value="6" >3000萬~1億</option>
                          <option value="7" >1億以上</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">省籍：</th>
                        <td class="bg-blue">
                        <select name="Love_Account_bornfrom" id="Love_Account_bornfrom">
                            <option value="" selected="selected">請選擇</option>
                            <option value="1" >本省人</option>
                            <option value="2" >外省人</option>
                            <option value="3" >客家人</option>
                            <option value="4" >原住民</option>          
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">血型：</th>
                        <td class="bg-blue">
                        <select name="Love_Account_bloodtype" id="Love_Account_bloodtype">
                            <option value="" selected="selected">請選擇</option>
                            <option value="A" >A</option>
                            <option value="B" >B</option>
                            <option value="AB" >AB</option>
                            <option value="O" >O</option>
                            <option value="other" >其它</option>          
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">家庭居住：</th>
                        <td class="bg-blue">
                        <select name="Love_Account_familylive" id="Love_Account_familylive">
                            <option value="" selected="selected">請選擇</option>
                            <option value="1" >獨自居住</option>
                            <option value="2" >父母同住</option>
                            <option value="3" >父母及兄弟姐妹同住</option>
                            <option value="4" >大家族同住</option>
                            <option value="5" >其它</option>              
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">家庭成員：</th>
                        <td class="bg-blue"><input name="Love_Account_familymember" type="text" id="Love_Account_msn" value="" size="60" />
                          <font color="#666666">例：兄x1、妹x2</font></td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">可排約時間(複選)：
                                            </th>
                        <td class="bg-blue"><input type="hidden" name="all_date_time" value="">
                          <input  name="Love_Account_datetime" type="checkbox" id="Love_Account_datetime" value="1" />
                          平日晚上
                          <input  name="Love_Account_datetime" type="checkbox" id="Love_Account_datetime" value="2" />
                          假日下午
                          <input  name="Love_Account_datetime" type="checkbox" id="Love_Account_datetime" value="3" />
                          假日晚上
                          <input  name="Love_Account_datetime" type="checkbox" id="Love_Account_datetime" value="4" />
                          不拘</td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">可排約地點(複選)：
                                            </th>
                        <td class="bg-blue"><p>
                          <input type="hidden" name="all_date_area" value="" />
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="1" />
                          台北
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="2" />
                          新北
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="3" />
                          基隆
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="4" />
                          宜蘭
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="5" />
                          桃園
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="6" />
                          新竹
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="7" />
                          苗栗
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="8" />
                          台中
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="9" />
                          彰化<br />
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="10" />
                          南投
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="11" />
                          嘉義
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="12" />
                          雲林
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="13" />
                          台南
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="14" />
                          高雄
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="15" />
                          屏東
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="16" />
                          台東
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="17" />
                          花蓮
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="18" />
                          澎湖<br />
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="19" />
                          金馬
                          <input  name="Love_Account_area" type="checkbox" id="Love_Account_area" value="20" />
                          不拘 </p></td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">個性特質(複選)：</th>
                                          <td class="bg-blue"><input type="hidden" name="all_personality" value="" />
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="八面玲瓏" />
                          八面玲瓏
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="親和友善" />
                          親和友善
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="細心體貼" />
                          細心體貼
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="善解人意" />
                          善解人意
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="溫文儒雅" />
                          溫文儒雅
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="多愁善感" />
                          多愁善感<br />
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="熱情活潑" />
                          熱情活潑
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="單純率真" />
                          單純率真
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="胡思亂想" />
                          胡思亂想
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="誠懇實在" />
                          誠懇實在
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="內向害羞" />
                          內向害羞
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="謙恭有禮" />
                          謙恭有禮<br />
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="幽默風趣" />
                          幽默風趣
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="沉穩內斂" />
                          沉穩內斂
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="外冷內熱" />
                          外冷內熱
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="溫柔婉約" />
                          溫柔婉約
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="樂觀開朗" />
                          樂觀開朗
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="爽朗健談" />
                          爽朗健談<br />
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="悠然自在" />
                          悠然自在
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="聰明伶俐" />
                          聰明伶俐
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="木訥寡言" />
                          木訥寡言
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="積極主動" />
                          積極主動
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="認真負責" />
                          認真負責
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="果斷堅決" />
                          果斷堅決<br />
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="精明幹練" />
                          精明幹練
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="獨立自主" />
                          獨立自主
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="優柔寡斷" />
                          優柔寡斷
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="依賴心重" />
                          依賴心重
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="明理成熟" />
                          明理成熟
                          <input  name="Love_Account_personality" type="checkbox" id="Love_Account_personality" value="重視義氣" />
                          重視義氣 </td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">個人興趣：</th>
                                          <td class="bg-blue"><input type="hidden" name="all_insud" value="" />
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="戶外活動" />
                          戶外活動
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="登山旅遊" />
                          登山旅遊
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="健身鍛鍊" />
                          健身鍛鍊
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="冥想打坐" />
                          冥想打坐
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="球類運動" />
                          球類運動
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="水上活動" />
                          水上活動<br />
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="團體聯誼" />
                          團體聯誼
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="藝文欣賞" />
                          藝文欣賞
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="溜冰滑雪" />
                          溜冰滑雪
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="義工服務" />
                          義工服務
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="花草園藝" />
                          花草園藝
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="泡湯溫泉" />
                          泡湯溫泉<br />
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="塑身美容" />
                          塑身美容
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="動漫欣賞" />
                          動漫欣賞
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="美食廚藝" />
                          美食廚藝
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="語言學習" />
                          語言學習
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="投資理財" />
                          投資理財
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="逛街購物" />
                          逛街購物<br />
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="電視電影" />
                          電視電影
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="運動釣魚" />
                          運動釣魚
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="唱歌跳舞" />
                          唱歌跳舞
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="攝影繪畫" />
                          攝影繪畫
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="電腦上網" />
                          電腦上網
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="電玩遊戲" />
                          電玩遊戲<br />
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="命理研究" />
                          命理研究
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="閱讀寫作" />
                          閱讀寫作
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="音樂欣賞" />
                          音樂欣賞
                          <input  name="Love_Account_insudoption" type="checkbox" id="Love_Account_insudoption" value="其它" />
                          其它
                          <input name="Love_Account_insud" type="text" id="Love_Account_inusd" value="" /></td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">吸引人的部份(複選)：</th>
                                          <td class="bg-blue"><input type="hidden" name="all_attract" value="" />
                          <input  name="Love_Account_attract" type="checkbox" id="Love_Account_attract" value="動人微笑" />
                          動人微笑
                          <input  name="Love_Account_attract" type="checkbox" id="Love_Account_attract" value="聰明頭腦" />
                          聰明頭腦
                          <input  name="Love_Account_attract" type="checkbox" id="Love_Account_attract" value="迷人身材" />
                          迷人身材
                          <input  name="Love_Account_attract" type="checkbox" id="Love_Account_attract" value="迷人雙眼" />
                          迷人雙眼
                          <input  name="Love_Account_attract" type="checkbox" id="Love_Account_attract" value="獨特氣質" />
                          獨特氣質
                          <input  name="Love_Account_attract" type="checkbox" id="Love_Account_attract" value="親切態度" />
                          親切態度<br />
                          <input  name="Love_Account_attract" type="checkbox" id="Love_Account_attract" value="幽默言談" />
                          幽默言談
                          <input  name="Love_Account_attract" type="checkbox" id="Love_Account_attract" value="善良體貼" />
                          善良體貼
                          <input  name="Love_Account_attract" type="checkbox" id="Love_Account_attract" value="其它" />
                          其它
                          <input name="Love_Account_otherattract" type="text" id="Love_Account_otherattract" value="" /></td>
                      </tr>
                      <tr>
                        <td width="150" class="bg-purple text-right">自我介紹：</th>
                        <td class="bg-blue"><textarea name="Love_Account_ind" cols="50" rows="5" id="Love_Account_ind"></textarea></td>
                      </tr>
                    </table>

                    <div class="dashline"></div>

                    <h3>>>希望擇偶條件</h3>
                    <table class="table01" width="100%" cellspacing="2" cellpadding="2">
                      <tr>
                        <td width="150" class="bg-purple text-right">對象的年次：</th>
                        <td class="bg-pink"><input name="Love_Account_oppyearl" type="text" id="Love_Account_oppyearl" value="" size="5" />
                          至
                          <label for="Love_Account_oppyearup"></label>
                          <input name="Love_Account_oppyearup" type="text" id="Love_Account_oppyearup" value="" size="5" />
                          民國年次 <font color="#666666">(年次的數字由小至大)</font></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">對象的學歷：</th>
                        <td class="bg-pink"><p>
                          <input  type="radio" value="00" name="Love_Account_oppedu" />
                          不限
                          <input  type="radio" value="1" name="Love_Account_oppedu" />
                          國中
                          <input  type="radio" value="2" name="Love_Account_oppedu" />
                          高中職
                          <input  type="radio" value="3" name="Love_Account_oppedu" />
                          大專
                          <input  type="radio" value="4" name="Love_Account_oppedu" />
                          大學
                          <input  type="radio" value="5" name="Love_Account_oppedu" />
                          碩士
                          <input  type="radio" value="6" name="Love_Account_oppedu" />
                          博士</p></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">對象的婚姻：</th>
                        <td class="bg-pink"><input  name="Love_Account_oppsmarry" type="radio" id="radio5" value="Y" />
                          可接受對方二春
                          <input  name="Love_Account_oppsmarry" type="radio" id="radio6" value="N" />
                          不接受對方二春</td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">理想的對象： </th>
                        <td class="bg-pink"><textarea name="Love_Account_oppind" cols="50" rows="5" id="Love_Account_oppind"></textarea></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">忌諱的對象：</th>
                        <td class="bg-pink"><textarea name="Love_Account_opphate" cols="50" rows="5" id="Love_Account_opphate"></textarea></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">其它備註事項：</th>
                        <td class="bg-pink"><textarea name="Love_Account_note" cols="50" rows="5" id="Love_Account_note"></textarea></td>
                      </tr>
                    </table>

                    <div style="float:right; margin:15px 15px 0 0;">
                      <button class="btn-purple">清除重設</button>
                      <button class="btn-purple" onclick="location.href='member.php'">送出排約資料</button>
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
