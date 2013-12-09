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
                                <li><a href="#">修改密碼</a></li>
                            </ul>
                        </div>
                        <div>
                        <!-- tab "panes" -->
                        <div class="panes p-info">
                            <!-- 修改基本資料 tab -->
                            <div class="clearfix">
                                <table class="table01" width="100%" cellspacing="2" cellpadding="2">
                      <tr>
                        <td width="180" class="bg-purple text-right">*登入帳號：</td>
                        <td class="bg-blue"><input name="Love_Account_acc" type="text" id="Love_Account_acc" size="25" />
              <font color="#666666">(6-20字元)</font></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*密碼設定：</td>
                        <td class="bg-blue"><input name="Love_Account_pwd" type="password" id="Love_Account_pwd" size="25" />
              <font color="#666666">(6-20字元)</font></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*密碼確認：</td>
                        <td class="bg-blue"><input name="Love_Account_pwd2" type="password" id="Love_Account_pwd2" size="25" onblur="passwordcheck()" /><div id="message"><div></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*真實姓名：</td>
                        <td class="bg-blue"><input name="Love_Account_name" type="text" id="Love_Account_name" size="15" />
              <font color="#666666">(不公開，請詳實填寫，註冊後無法修改)</font></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*暱稱：</td>
                        <td class="bg-blue"><input name="Love_Account_nickname" type="text" id="Love_Account_nickname" size="15" />
              <font color="#666666">(本站會員區專用)</font></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*性別：</td>
                        <td class="bg-blue"><input name="Love_Account_sex" type="radio" value="M" />
男
  <input type="radio" name="Love_Account_sex" value="F" />
女 <font color="#666666">(請詳實填寫，註冊後無法修改)</font></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*生日：</td>
                        <td class="bg-blue"><select name="Love_Account_biry" size="1" id="Love_Account_biry">
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option>
              <option value="45">45</option>
              <option value="46">46</option>
              <option value="47">47</option>
              <option value="48">48</option>
              <option value="49">49</option>
              <option value="50">50</option>
              <option value="51">51</option>
              <option value="52">52</option>
              <option value="53">53</option>
              <option value="54">54</option>
              <option value="55">55</option>
              <option value="56">56</option>
              <option value="57">57</option>
              <option value="58">58</option>
              <option value="59">59</option>
              <option value="60">60</option>
              <option value="61">61</option>
              <option value="62">62</option>
              <option value="63">63</option>
              <option value="64">64</option>
              <option value="65">65</option>
              <option value="66">66</option>
              <option value="" selected="selected">民國</option>
              <option value="67">67</option>
              <option value="68">68</option>
              <option value="69">69</option>
              <option value="70">70</option>
              <option value="71">71</option>
              <option value="72">72</option>
              <option value="73">73</option>
              <option value="74">74</option>
              <option value="75">75</option>
              <option value="76">76</option>
              <option value="77">77</option>
              <option value="78">78</option>
              <option value="79">79</option>
              <option value="80">80</option>
              <option value="81">81</option>
              <option value="82">82</option>
              <option value="83">83</option>
              <option value="84">84</option>
              <option value="85">85</option>
            </select>
/
<select name="Love_Account_birm" size="1" id="Love_Account_birm">
  <option value="" selected="selected">月</option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
  <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
/
<select name="Love_Account_bird" size="1" id="Love_Account_bird">
  <option value="" selected="selected">日</option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
  <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>
<font color="#666666">(請詳實填寫，註冊後無法修改)</font></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*星座：</td>
                        <td class="bg-blue"><select name="Love_Account_star" id="Love_Account_star">
                <option value="">請選擇星座</option>
                <option value="1">水瓶座</option>
                <option value="2">雙魚座</option>
                <option value="3">牡羊座</option>
                <option value="4">金牛座</option>
                <option value="5">雙子座</option>
                <option value="6">巨蟹座</option>
                <option value="7">獅子座</option>
                <option value="8">處女座</option>
                <option value="9">天秤座</option>
                <option value="10">天蠍座</option>
                <option value="11">射手座</option>
                <option value="12">魔羯座</option>
              </select></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*身高/體重：</td>
                        <td class="bg-blue"><input name="Love_Account_height" type="text" id="Love_Account_height" size="5" />
cm/
            <label for="Love_Account_weight"></label>
            <input name="Love_Account_weight" type="text" id="Love_Account_weight" size="5" />
kg<font color="#666666">(不公開)</font></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*學歷：</td>
                        <td class="bg-blue"><input type="radio" value="1" name="Love_Account_edu" />
              國中
              <input type="radio" value="2" name="Love_Account_edu" />
              高中職
  <input type="radio" value="3" name="Love_Account_edu" />
  專科
  <input type="radio" value="4" name="Love_Account_edu" />
              大學
  <input type="radio" value="5" name="Love_Account_edu" />
              碩士
  <input type="radio" value="6" name="Love_Account_edu" />
              博士<font color="#666666">(註冊後無法修改)</font></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*畢業學校：</td>
                        <td class="bg-blue"><input type="text" name="Love_Account_grd" id="Love_Account_grd" />
            &nbsp;&nbsp;&nbsp;&nbsp;*科系<input type="text" name="Love_Account_grdsubject" id="Love_Account_grdsubject" /></td>
                      </tr>
                      <tr>
                        <td class="bg-purple text-right">*公司名稱：</td>
                        <td class="bg-blue"><input name="Love_Account_company" type="text" id="Love_Account_company" size="15" />
            &nbsp;&nbsp;&nbsp;&nbsp;*職稱：
            <input name="Love_Account_job" type="text" id="Love_Account_job" size="15" />
                &nbsp;&nbsp;&nbsp;&nbsp;*年資：
                <select name="Love_Account_jobyear" id="Love_Account_jobyear">
                <option value="" selected="selected">年資</option>
                <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>                </select></td>
                      </tr>
                      <tr>
            <td class="bg-purple text-right">*居住縣市：</th>
            <td class="bg-blue"><select name="Love_Account_live" size="1" id="Love_Account_live">
              <option value="" selected="selected">請選擇縣市</option>
              <option value="1">台北市</option>
              <option value="2">新北市</option>
              <option value="3">基隆</option>
              <option value="4">宜蘭</option>
              <option value="5">桃園</option>
              <option value="6">新竹</option>
              <option value="7">苗栗</option>
              <option value="8">台中</option>
              <option value="9">彰化</option>
              <option value="10">南投</option>
              <option value="11">嘉義</option>
              <option value="12">雲林</option>
              <option value="13">台南</option>
              <option value="14">高雄</option>
              <option value="15">屏東</option>
              <option value="16">台東</option>
              <option value="17">花蓮</option>
              <option value="18">澎湖</option>
              <option value="19">金門</option>
              <option value="20">馬祖</option>
              <option value="21">其它</option>
            </select></td>
          </tr>
          <tr>
            <td class="bg-purple text-right">*工作地區：</th>
            <td class="bg-blue"><select name="Love_Account_workplace" size="1" id="Love_Account_workplace">
              <option value="" selected="selected">請選擇縣市</option>
              <option value="1">台北市</option>
              <option value="2">新北市</option>
              <option value="3">基隆</option>
              <option value="4">宜蘭</option>
              <option value="5">桃園</option>
              <option value="6">新竹</option>
              <option value="7">苗栗</option>
              <option value="8">台中</option>
              <option value="9">彰化</option>
              <option value="10">南投</option>
              <option value="11">嘉義</option>
              <option value="12">雲林</option>
              <option value="13">台南</option>
              <option value="14">高雄</option>
              <option value="15">屏東</option>
              <option value="16">台東</option>
              <option value="17">花蓮</option>
              <option value="18">澎湖</option>
              <option value="19">金門</option>
              <option value="20">馬祖</option>
              <option value="21">其它</option>
            </select></td>
          </tr>
          <tr>
            <td class="bg-purple text-right">*婚姻： </th>
            <td class="bg-blue"><input type="radio" value="01" name="Love_Account_marry" />
未婚
  <input type="radio" value="02" name="Love_Account_marry" />
離婚
<input type="radio" value="03" name="Love_Account_marry" />
喪偶<font color="#666666">(請詳實填寫，註冊後無法修改)</font></td>
          </tr>
          <tr>
            <td class="bg-purple text-right">*行動電話1：</th>
            <td class="bg-blue"><input name="Love_Account_cellphone" type="text" id="Love_Account_cellphone" size="15" />
              &nbsp;&nbsp;*業者1：
              <select name="Love_Account_cellphonec" size="1" id="Love_Account_cellphonec">
              <option value="">請選擇</option>
              <option value="1">遠傳</option>
              <option value="2">中華</option>
              <option value="3">台灣大</option>
              <option value="4">亞太</option>
              <option value="5">威寶</option>
              <option value="6">PHS</option>
              <option value="7">其它</option>
            </select>
              &nbsp;&nbsp;*是否為line電話：
              <input type="radio" name="Love_Account_cellphoneline" id="Love_Account_cellphoneline" value="1" />是
              &nbsp;&nbsp;
              
              <input type="radio" name="Love_Account_cellphoneline" id="Love_Account_cellphoneline" value="0" />否
              </td>
          </tr>
          <tr>
            <td class="bg-purple text-right">行動電話2：</th>
            <td class="bg-blue"><input name="Love_Account_cellphone2" type="text" id="Love_Account_cellphone2" size="15" />
              &nbsp;&nbsp;&nbsp;&nbsp;業者2：
              <select name="Love_Account_cellphonec2" size="1" id="Love_Account_cellphonec2">
              <option value="">請選擇</option>
              <option value="1">遠傳</option>
              <option value="2">中華</option>
              <option value="3">台灣大</option>
              <option value="4">亞太</option>
              <option value="5">威寶</option>
              <option value="6">PHS</option>
              <option value="7">其它</option>
            </select>
            &nbsp;&nbsp;&nbsp;是否為line電話：
              <input type="radio" name="Love_Account_cellphoneline2" id="Love_Account_cellphoneline2" value="1" />是
              &nbsp;&nbsp;
              
              <input type="radio" name="Love_Account_cellphoneline2" id="Love_Account_cellphoneline2" value="0" />否
            </td>
          </tr>
          <tr>
            <td class="bg-purple text-right">匯款帳號後5碼：</th>
            <td class="bg-blue"><input name="Love_Account_atm" type="text" id="Love_Account_atm" size="15" />
              <font color="#666666">(建議先填寫欲轉帳之銀行帳號，以利後續匯款帳務之核對)</font></td>
          </tr>
          <tr>
            <td class="bg-purple text-right">*E-MAIL：</th>
            <td class="bg-blue"><input name="Love_Account_mail" type="text" id="Love_Account_mail" size="30" />
              <font color="#666666">請務必填寫可以接收gmail的信箱，接收「驗証信」後才能成為正式會員。</font><font color="red">收信時請檢查是否被歸類為垃圾信!)</font></td>
          </tr>
          <tr>
            <td class="bg-purple text-right">*同意將E-MAIL公開於活動名單：</th>
            <td class="bg-blue"><input type="radio" name="Love_Account_mailopen" id="radio" value="Y" />
              同意
                <label for="Love_Account_mailopen"></label>
              <input type="radio" name="Love_Account_mailopen" id="radio2" value="N" />
              不同意
              <label for="Love_Account_mailopen"></label>
              <font color="#666666">(將個人MAIL公開於當日聯誼之活動名單)</font></td>
          </tr>
          <tr>
            <td class="bg-purple text-right">facebook帳號：</th>
            <td class="bg-blue"><input name="Love_Account_facebook" type="text" id="Love_Account_facebook" size="30" />
            </td>
          </tr>
          <tr>
            <td class="bg-purple text-right">*何處知道本站訊息：</th>
            <td class="bg-blue"><input type="radio" value="01" name="Love_Account_msg" />
Yahoo
  <input type="radio" value="02" name="Love_Account_msg" />
Google
<input type="radio" value="03" name="Love_Account_msg" />
Facebook
<input type="radio" value="04" name="Love_Account_msg" />
親友推薦
<input type="radio" value="05" name="Love_Account_msg" />
Email
<input type="radio" value="07" name="Love_Account_msg" />
戀戀未來部落格
<input type="radio" value="06" name="Love_Account_msg" />
其它
<input name="Love_Account_othermsg" type="text" id="Love_Account_othermsg" size="10" /></td>
          </tr>
          <tr>
            <td class="bg-purple text-right">其它備註事項：</th>
            <td class="bg-blue"><textarea name="Love_Account_note" cols="50" rows="5" id="Love_Account_note"></textarea></td>
          </tr>
          <tr>
            <td class="bg-purple text-right">個人照片：</th>
            <td class="bg-blue">
            
            <table><tr><td><img src="images/profile/visit.gif" alt="會員預設照片"></td><td valign="bottom">
      <b>可上傳3張照片(第1張照片為站內大頭照)</b>
      
      <div style="padding:15px 0px 0px 0px">上傳照片1:<input type="file"  name="my_photo[]"></div>
      
            <div style="padding:15px 0px 0px 0px">上傳照片2:<input type="file"  name="my_photo[]"></div>
            
            <div style="padding:15px 0px 0px 0px">上傳照片3:<input type="file"  name="my_photo[]"></div>
      
      <div style="padding-top:15px"><font color="#666666" size="-2">上傳照片格式：jpg,gif,png檔<br />
      上傳照片大小：2M以內(上傳照片時間較久，請耐心等候)</font></div>
      </td></tr></table>
            </td>
          </tr>
          <tr>
            <td class="bg-purple text-right">員條款：</th>
            <td class="bg-blue"><label for="123"></label>
              <textarea name="privacy" id="123" cols="57" rows="10">
                      戀戀未來會員條款

第一條  隱私權政策
戀戀未來 (以下簡稱本站)對會員個人資料之收集, 謹遵守中華民國「電腦處理個人資料保護法」之規範。
保護我們所有會員的隱私權
基於我們所提供的服務所需，我們會收集會員的個人資訊，但我們非常重視這些資料的隱私性和機密性。
線上隱私權著重在保護「可以辨識會員身份」的資訊，這些是不管個人或其他客戶都會期望保密的資訊。顧名思義，「可以辨識會員身份」的資訊就是指可以聯想到特定的人或實體的資訊，舉例來說包括會員姓名、地址、電話號碼、電子郵件地址，以及可以直接連繫到客戶的線上活動相關資訊。
我們極重視您的隱私權。我們絕不會販賣或交換個人資訊，或將其用在未經授權的用途上。我們保證不會將您的任何個人資料透露給任何其他的組織。當您造訪這個網站並將您的個人資訊提供給我們時，即表示您接受及同意本隱私權政策中所述的做法。
為了保護會員個人隱私，我們無法為您查詢其他會員的帳號資料，若有相關法律上問題需查閱他人資料時，請務必向檢警單位提出告訴，我們將全力配合檢警單位調查並提供相關資料。
網友加入本站參與婚戀平台交友時，填寫之個人基本資料，如：姓名、地址、職業、收入、聯絡電話、電子信箱地址等，是本網站提供交友服務所必要，同時藉此資料了解會員需求以改進服務品質。本站絕不將會員資料販賣或透露給網站以外的其他人及單位，並與從業人員簽署保密契約，保密範圍包括您未公開於本站上的個人連絡資料，我們會善盡保密之義務。但下列情況不在此限：
1.本站提供服務所必須
2.經本人同意
3.檢警機關符合法定完備程序的偵查要求
本站設有系統監控保護機制，對於異常的流量、瀏覽行為將進行觀測，如有異常系統將啟動異常警示，以利進行各項緊急處理。

第二條  個人資料保護法
本站之個人資料之蒐集、處理及利用，係作為活動名冊及活動聯繫等與本站活動相關事項之用。由承辦單位依關法令規定妥善保存保密。
您已明確了解備註欄所告知之個資蒐集、處理及利用之相關事項，同意提供本站之個資於辦理本活動之相關機關，並同意本站之說明處理及利用此等個資。

本公司係依據本約定書條款提供戀戀未來企業網站（http://www.futurelove.com.tw）會員服務(以下簡稱本服務)。當您使用本服務時，除表示您已閱讀並接受本站之所有資料外，並同意本公司對您的個人資料，有依「電腦處理個人資料保護法」之相關規定，為蒐集、電腦處理或國際傳遞、利用之權利。

本公司有權於任何時間修改或變更本約定書之內容，建議您隨時注意該等修改或變更。您於任何修改或變更後繼續使用本站，視為您已閱讀、瞭解並同意接受該等修改或變更。如果您不同意本約定書的內容，您應立即停止使用本網站。

第三條  帳戶使用規定
您瞭解並同意以下與本站帳戶相關的限制：
1、一人一帳戶
您在本網站上只能擁有一個帳戶。若是您的帳戶被停用，無法在本站上另外註冊一個新帳戶。
2、禁止未經本人同意，非本人註冊
您必須使用自己的個人資訊註冊。除非您是殘障人士或是需要第三方協助註冊的行動障礙人士，否則未經本人同意，不得由他人協助註冊。
3、禁止轉讓帳戶
您不得將自己的帳戶轉讓給其他人。

第四條  登錄義務
為得以使用本服務，您同意：
1、依服務登錄表提供您自己正確、最新及完整的資料。
2、您提供的資料如有錯誤或不實，本公司得暫停或是終止您的會員身份。


第五條  顧客資料保密措施
關於您的會員登錄及其他特定資料，依「電腦處理個人資料保護法」及本公司「顧客資料保密措施」受到保護。

第六條  會員帳號、密碼與安全
1、會員應妥善保管帳號及密碼，並於每次使用後確實登出，以防他人盜用。
會員發現或懷疑自己的會員帳號及密碼遭他人盜用時，應該立即通知本公司採取必要的處置。但該通知不得解釋為本公司對會員負有任何賠償或補償之責任或義務。

第七條  使用者的守法義務及承諾
您承諾絕不為任何非法目的或以任何非法方式使用戀戀未來企業網站，並承諾遵守中華民國相關法規及一切使用網際網路之國際慣例。您若係中華民國以外之使用者，並同意遵守所屬國家或地域之法令。您同意並保證不得利用本服務從事侵害他人權益或違法之行為，包括但不限於：
1、公布或傳送任何誹謗、侮辱、具威脅性、攻擊性、不雅、猥褻、不實、違反公共秩序或善良風俗或其他不法之文字、圖片或任何形式的檔案於法國巴黎人壽企業網站上。
2、違反依法律或契約所應負之保密義務。
3、冒用他人名義使用本服務。
4、傳輸或散佈電腦病毒。
5、其他戀戀未來企業網站有正當理由認為不適當之行為。

第八條  資訊或建議
您由本網站或本網站連結之其他網站下載取得之軟體或資料，本公司對該軟體或資料不負擔保或保證之責。

第九條  廣告行為
本網站上所有廣告，均由各該廣告商、產品與服務的供應商所設計與提出，會員對於廣告內容之正確性與可信度應自行判斷，本公司僅提供網站供刊登或鏈結，對該廣告不負擔保責任。

第十條  買賣或其他交易行為
會員經由本網站連結之其他網站與廠商進行商品買賣、服務或其他交易者，其因此所生之法律關係僅存在於會員與廠商之間，與本公司無涉。

第十一條  智慧財產權
本公司所使用之軟體、程式及網站上所有內容，包括但不限於著作、圖片、檔案、資訊、資料、網站架構、網站畫面的安排、網頁設計，均由本公司或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。
任何人不得逕自使用、修改、重製、公開播送、改作、散佈、發行、公開發表或進行還原工程、解編或反向組譯。若您欲引用或轉載前述軟體、程式或網站內容，必須依法取得本公司或其他權利人的事前書面同意。如有違反，您應對本公司負損害賠償責任（包括但不限於訴訟費用及律師費用等）。 

第十二條  免責聲明
本網站除本公司所提供之服務、資訊且無第十三條第四款之情事者外，就下列事項不負保證之責：
1、本服務符合您的需求。
2、本服務不受干擾、及時提供、安全性、可靠性、正確性或完整性。

第十三條  服務暫停或中止
有下列情事之一者，本公司得暫停、變更、中斷或終止本服務之全部或一部，對於會員因此所致之損害，本公司不負任何賠償或補償責任：
1、本公司對本服務相關軟硬體設備進行搬遷、更換、升級、保養或維修者。
2、會員有任何違反政府法令或本約定書條款者。
3、天災或其他不可抗力。
4、非本公司所得控制之事由致本服務資訊顯示不正確、遭偽造、竄改、刪除或擷取或致系統中斷或不能正常運作時。
5、其他不可歸責於本公司之事由。

第十四條  會員身份終止
會員違反本約定書條款，或違反活動須知之內容條款，或自行將其專屬權益停止者，本公司得不經催告終止其會員資格，並追究相關之法律責任。
會員得隨時以書面或電子郵件通知本公司終止其會員資格，但若曾參與過本公司活動，則本公司有權保有基本次料及參加紀錄。

第十五條  條款之效力、準據法與管轄法院
本約定書任一條款無效者，不影響其他條款之效力。會員與本公司之權利義務，依網路規範及中華民國法律定之；因本約定書所生事項涉訟時，以台灣台北地方法院為第一審管轄法院。

              </textarea><br />
              <p><input type="checkbox" name="radioAgree" id="radioAgree" />我已同意戀戀未來會員條款及隱私權政策</p>
            </td>
          </tr>
          <tr>
            <td class="bg-purple text-right">驗証碼：</th>
            <td class="bg-blue"><input type="text" name="checknum" id="checknum"><img src="showrandimg.php" id="rand-img">&nbsp;&nbsp;<a href="#" id="reload-img">換一個驗証碼</a></td>
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

                            <!-- 修改密碼 tab -->
                            <div class="clearfix">
                                
                              <div align="center">

                                <table class="table01" width="500">
                                  <tr>
                                    <td class="bg-purple text-right">
                                      現有密碼：
                                    </td>
                                    <td class="bg-blue">
                                      <label for="Love_Account_pwd"></label>
                                      <input type="text" name="Love_Account_pwd" id="Love_Account_pwd">
                                   </td>
                                 </tr>
                                  <tr>
                                    <td class="bg-purple text-right">
                                      新密碼：
                                    </td>
                                    <td class="bg-blue">
                                      <label for="Love_Account_pwd"></label>
                                      <input type="text" name="Love_Account_pwd" id="Love_Account_pwd">
                                     <font color="#666666">(6-20字元)</font>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td class="bg-purple text-right">
                                      重新輸入新密碼：
                                    </td>
                                    <td class="bg-blue">
                                      <label for="Love_Account_pwd2"></label>
                                      <input type="text" name="Love_Account_pwd2" id="Love_Account_pwd2">
                                    </td>
                                  </tr>
                                </table>

                                <div align="center" style="margin-top:50px">
                                  <button class="btn-purple">變更密碼</button>
                                  <button class="btn-purple">清除重設</button>
                                </div>

                              </div>  
                            
                            </div>
                            <!--end 修改密碼 tab -->
                            
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
