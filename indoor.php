<?php require_once('Connections/con1.php'); ?>
<?php require_once('transformweek.php');?>
<?php
#	BuildNav for Dreamweaver MX v0.2
#              10-02-2002
#	Alessandro Crugnola [TMM]
#	sephiroth: alessandro@sephiroth.it
#	http://www.sephiroth.it
#	
#	Function for navigation build ::
function buildNavigation($pageNum_Recordset1,$totalPages_Recordset1,$prev_Recordset1,$next_Recordset1,$separator=" | ",$max_links=10, $show_page=true)
{
                GLOBAL $maxRows_active_rec,$totalRows_active_rec;
	$pagesArray = ""; $firstArray = ""; $lastArray = "";
	if($max_links<2)$max_links=2;
	if($pageNum_Recordset1<=$totalPages_Recordset1 && $pageNum_Recordset1>=0)
	{
		if ($pageNum_Recordset1 > ceil($max_links/2))
		{
			$fgp = $pageNum_Recordset1 - ceil($max_links/2) > 0 ? $pageNum_Recordset1 - ceil($max_links/2) : 1;
			$egp = $pageNum_Recordset1 + ceil($max_links/2);
			if ($egp >= $totalPages_Recordset1)
			{
				$egp = $totalPages_Recordset1+1;
				$fgp = $totalPages_Recordset1 - ($max_links-1) > 0 ? $totalPages_Recordset1  - ($max_links-1) : 1;
			}
		}
		else {
			$fgp = 0;
			$egp = $totalPages_Recordset1 >= $max_links ? $max_links : $totalPages_Recordset1+1;
		}
		if($totalPages_Recordset1 >= 1) {
			#	------------------------
			#	Searching for $_GET vars
			#	------------------------
			$_get_vars = '';			
			if(!empty($_GET) || !empty($HTTP_GET_VARS)){
				$_GET = empty($_GET) ? $HTTP_GET_VARS : $_GET;
				foreach ($_GET as $_get_name => $_get_value) {
					if ($_get_name != "pageNum_active_rec") {
						$_get_vars .= "&$_get_name=$_get_value";
					}
				}
			}
			$successivo = $pageNum_Recordset1+1;
			$precedente = $pageNum_Recordset1-1;
			$firstArray = ($pageNum_Recordset1 > 0) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_active_rec=$precedente$_get_vars\">$prev_Recordset1</a>" :  "$prev_Recordset1";
			# ----------------------
			# page numbers
			# ----------------------
			for($a = $fgp+1; $a <= $egp; $a++){
				$theNext = $a-1;
				if($show_page)
				{
					$textLink = $a;
				} else {
					$min_l = (($a-1)*$maxRows_active_rec) + 1;
					$max_l = ($a*$maxRows_active_rec >= $totalRows_active_rec) ? $totalRows_active_rec : ($a*$maxRows_active_rec);
					$textLink = "$min_l - $max_l";
				}
				$_ss_k = floor($theNext/26);
				if ($theNext != $pageNum_Recordset1)
				{
					$pagesArray .= "<a href=\"$_SERVER[PHP_SELF]?pageNum_active_rec=$theNext$_get_vars\">";
					$pagesArray .= "$textLink</a>" . ($theNext < $egp-1 ? $separator : "");
				} else {
					$pagesArray .= "$textLink"  . ($theNext < $egp-1 ? $separator : "");
				}
			}
			$theNext = $pageNum_Recordset1+1;
			$offset_end = $totalPages_Recordset1;
			$lastArray = ($pageNum_Recordset1 < $totalPages_Recordset1) ? "<a href=\"$_SERVER[PHP_SELF]?pageNum_active_rec=$successivo$_get_vars\">$next_Recordset1</a>" : "$next_Recordset1";
		}
	}
	return array($firstArray,$pagesArray,$lastArray);
}
?>
<?php require_once('../Connections/con1.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_active_rec = 12;
$pageNum_active_rec = 0;
if (isset($_GET['pageNum_active_rec'])) {
  $pageNum_active_rec = $_GET['pageNum_active_rec'];
}
$startRow_active_rec = $pageNum_active_rec * $maxRows_active_rec;

mysql_select_db($database_con1, $con1);
$query_active_rec = "SELECT * FROM love_admin_active where Love_Admin_ACopen='1' and Love_Admin_ACdatee >= '".date('Y/m/d')."' and (Love_Admin_ACtype='1' or Love_Admin_ACtype='3' or Love_Admin_ACtype='4') order by Love_Admin_ACdate asc";
$query_limit_active_rec = sprintf("%s LIMIT %d, %d", $query_active_rec, $startRow_active_rec, $maxRows_active_rec);
$active_rec = mysql_query($query_limit_active_rec, $con1) or die(mysql_error());
$row_active_rec = mysql_fetch_assoc($active_rec);

if (isset($_GET['totalRows_active_rec'])) {
  $totalRows_active_rec = $_GET['totalRows_active_rec'];
} else {
  $all_active_rec = mysql_query($query_active_rec);
  $totalRows_active_rec = mysql_num_rows($all_active_rec);
}
$totalPages_active_rec = ceil($totalRows_active_rec/$maxRows_active_rec)-1;
?>
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
                
                <h2 class="heading-purple">
                	團體 / 一對一 聯誼活動
                </h2>
                <div class="heading-dashline"></div>
                
                
                <div class="top-selection clearfix">
                	<div class="selection-category">分 類 ｜</div>
                    <ul class="clearfix">
                    	<li><a href="indoor.php">近期</a></li>
                        <li><a href="indoorTP.php">台北</a></li>
                        <li><a href="indoorTY">桃園</a></li>
                        <li><a href="indoorHC">新竹</a></li>
                        <li><a href="indoorTC">台中</a></li>
                        <li><a href="indoorTN">台南</a></li>
                        <li><a href="indoorKH">高雄</a></li>
                        <li><a href="indoorOT">其它</a></li>
                        <li><a href="indoorH">歷史活動</a></li>
                  </ul>
                </div>
                <div class="dashline"></div>
                
                <div class="page-content">
                	<h3>>> 近期聯誼活動公告</h3>
                    
                    <div class="p-area">
                    	<ul class="clearfix">
                          <?php do { ?>
                          <li class="clearfix">
                              <a href="#"><img src="images/<?php echo $row_active_rec['Love_Admin_ACtypepic']; ?>" width="160" height="120" class="image"></a>
                              <div class="info">
                                <div class="font-purple">
                                  [<?php
					   $a=$row_active_rec['Love_Admin_AClocal']; 
			   if($a==tp){echo "台北";}
			   else if($a==ty){echo "桃園";}
			   else if($a==hc){echo "新竹";}
			   else if($a==tc){echo "台中";}
			   else if($a==jy){echo "嘉義";}
			   else if($a==tn){echo "台南";}
			   else if($a==kh){echo "高雄";}
			   else if($a==yl){echo "宜蘭";}
			   else if($a==ml){echo "苗栗";}
			   else if($a==ch){echo "彰化";}
			   else if($a==py){echo "屏東";}
					  ?>] <?php echo $row_active_rec['Love_Admin_ACdate']; ?>(<?php
			  //活動日期轉換為星期 
              $activitydate=$row_active_rec['Love_Admin_ACdate']; //活動日期
              $activityweek=transformWeek01(date('w', mktime(0,0,0, getDateMonth($activitydate), getDateDate($activitydate), getDateYear($activitydate))));
              echo $activityweek;
              ?>)
                                </div>
                                <div class="font-grey"> ~<?php echo $row_active_rec['Love_Admin_ACsubject']; ?> </div>
                                <a href="group-info.php" class="e-more">活動詳情</a>
                              </div>
                          </li>
                          <?php } while ($row_active_rec = mysql_fetch_assoc($active_rec)); ?>
                      </ul>
                  </div>
                    
                    <div class="pagenav">
                        
                        <?php 
# variable declaration
$prev_active_rec = "« 上一頁";
$next_active_rec = "下一頁 »";
$separator = " ";
$max_links = 10;
$pages_navigation_active_rec = buildNavigation($pageNum_active_rec,$totalPages_active_rec,$prev_active_rec,$next_active_rec,$separator,$max_links,true); 

print $pages_navigation_active_rec[0]; 
?>
                    <?php print $pages_navigation_active_rec[1]; ?> <?php print $pages_navigation_active_rec[2]; ?> </div>
                	
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
<?php
mysql_free_result($active_rec);
?>
