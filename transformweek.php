<?php

  
//轉換日期格式 (YYYYMMDD -> YYYY-MM-DD)
function transformDate01($date) {
  return substr($date,0,4).'/'.substr($date,4,2).'/'.substr($date,6,2);
} 

//轉換日期格式 (YYYYMMDD -> YYYY年MM月DD日)
function transformDate02($date) {
  return substr($date,0,4).'年'.substr($date,4,2).'月'.substr($date,6,2).'日';
} 

//轉換日期格式 (YYYYMMDD -> YYYY/MM/DD日)
function transformDate03($date) {
  return substr($date,0,4).'/'.substr($date,4,2).'/'.substr($date,6,2);
}

function getDateYear($date) {
  return substr($date,0,4);
}

function getDateMonth($date) {
  return substr($date,5,2);
}

function getDateDate($date) {
  return substr($date,8,2);
}

//轉換時間格式 (HHmm -> HH:mm)
function transformTime01($time) {
  return substr($time,0,2).':'.substr($time,2,2);
} 

//轉換星期
function transformWeek01($week=0) {
  if($week == 0) {
    return '日';
  } else if($week == 1) {
    return '一';
  } else if($week == 2) {
    return '二';
  } else if($week == 3) {
    return '三';
  } else if($week == 4) {
    return '四';
  } else if($week == 5) {
    return '五';
  } else if($week == 6) {
    return '六';
  } 
} 
?>