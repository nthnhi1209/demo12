<?php
    error_reporting(0);
	ob_start(); session_start();
	date_default_timezone_set("Asia/Bangkok");
	require_once("checklogin.php");
	$p = $_GET['p'];
?>
<style>
<?php /* tu van */
if($_SESSION['tg_login_level']==0){
	$_SESSION['quyen'] = array(
		"col_phone" => 1,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_thaotac" => 1, 
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 0,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0,
		"col_upload" => 1
	);	
	?>
	.col_diachi, .col_dieutri{display:none;}
<?php
}  /* tu van zalo */
else if($_SESSION['tg_login_level']==11){
	$_SESSION['quyen'] = array(
		"col_phone" => 1,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_thaotac" => 1, 
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 0,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0
	);	
	?>
	.col_diachi, .col_dieutri{display:none;}
<?php
}  /* tu van phu khoa */
else if($_SESSION['tg_login_level']==12){
	$_SESSION['quyen'] = array(
		"col_phone" => 1,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_thaotac" => 1, 
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 0,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0
	);	
	?>
	.col_diachi, .col_dieutri{display:none;}	
    <?php
} /* adw  */
elseif($_SESSION['tg_login_level']==1){
	$_SESSION['quyen'] = array(
		"col_phone" => 0,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_str" => 1,
		"col_chinh" => 0,
		"col_xuatnam" => 0,
		"col_xuatnu" => 0,
		"col_xuattatca" => 0,
		"col_upload"=> 1,
		"col_xuat" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0
	);
	?>
	.col_diachi, .col_dieutri{display:none;}
    <?php	
}  /* tiep tan */
elseif($_SESSION['tg_login_level']==2){
	$_SESSION['quyen'] = array(
		"col_phone" => 0,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 1,
		"col_str" => 0,
		"col_chinh" => 1,
		"col_xuatnam" => 0,
		"col_xuatnu" => 0,
		"col_xuattatca" => 0,
		"col_upload"=> 0,
		"col_xuat" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 1
	);
	?>
    .col_diachi, .col_dieutri{display:none;}
    <?php
} /* to truong tu van */
elseif($_SESSION['tg_login_level']==3){
	$_SESSION['quyen'] = array(
		"col_phone" => 1,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 1,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"col_upload"=> 1,
		"col_xuat" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0
	);
	?>
    .col_diachi, .col_dieutri{display:none;}
    <?php
} /* dac biet */
elseif($_SESSION['tg_login_level']==4){
	$_SESSION['quyen'] = array(
		"col_phone" => 0,
		"col_them" => 0,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_str" => 1,
		"col_chinh" => 0,
		"col_xuatnam" => 1,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"col_upload"=> 0,
		"col_xuat" => 0,
		"Nguon_timkiem" => 1,
		"str_timkiem" => 1,
		"tick_den" => 0
	);
	?>
    .col_diachi, .col_dieutri{display:none;}
    <?php
}
elseif($_SESSION['tg_login_level']==5){
	$_SESSION['quyen'] = array(
		"col_phone" => 1,
		"col_them" => 1,
		"col_xoa" => 1,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 1,
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 1,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"col_upload"=> 1,
		"col_xuat" => 1,
		"Nguon_timkiem" => 1,
		"str_timkiem" => 1,
		"tick_den" => 1
	);
?>
	.col_diachi, .col_dieutri{display:none;}
<?php 
}
elseif($_SESSION['tg_login_level']==6){
	$_SESSION['quyen'] = array(
		"col_chiendich" => 0,
		"col_them" => 0,
		"col_phone" => 0,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_str" => 0,
		"col_chinh" => 0,
		"col_upload" =>1,
		"col_xuat" => 0,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0
	);
?>
	.col_diachi, .col_dieutri{display:none;}
<?php 
}
/*face*/
elseif($_SESSION['tg_login_level']==7){
	$_SESSION['quyen'] = array(
		"col_phone" => 0,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_str" => 1,
		"col_chinh" => 0,
		"col_xuatnam" => 1,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"col_upload"=> 0,
		"col_xuat" => 1,
		"Nguon_timkiem" => 1,
		"str_timkiem" => 1,
		"tick_den" => 0
	);
?>
	.col_diachi, .col_dieutri{display:none;}
<?php }
/*chu quan zalo Q12*/
elseif($_SESSION['tg_login_level']==8){
	$_SESSION['quyen'] = array(
		"col_phone" => 0,
		"col_them" => 1,
		"col_xoa" => 1,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 1,
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 1,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"col_upload"=> 1,
		"col_xuat" => 1,
		"Nguon_timkiem" => 1,
		"str_timkiem" => 1,
		"tick_den" => 1
	);
?>
	.col_diachi, .col_dieutri{display:none;}
<?php }
/*adw*/
elseif($_SESSION['tg_login_level']==9){
	$_SESSION['quyen'] = array(
		"col_phone" => 0,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_str" => 1,
		"col_chinh" => 0,
		"col_xuatnam" => 1,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"col_upload"=> 0,
		"col_xuat" => 1,
		"Nguon_timkiem" => 1,
		"str_timkiem" => 1,
		"tick_den" => 0
	);
?>
	.col_diachi, .col_dieutri{display:none;}
<?php }
/*manager adw and tro ly*/
elseif($_SESSION['tg_login_level']==10){
	$_SESSION['quyen'] = array(
		"col_phone" => 0,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_str" => 1,
		"col_chinh" => 0,
		"col_xuatnam" => 1,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"col_upload"=> 0,
		"col_xuat" => 1,
		"Nguon_timkiem" => 1,
		"str_timkiem" => 1,
		"tick_den" => 0
	);
?>
	.col_diachi, .col_dieutri{display:none;}
<?php }	
	// to truong phu khoa
elseif($_SESSION['tg_login_level']==13){
	$_SESSION['quyen'] = array(
		"col_phone" => 0,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 1,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"col_upload"=> 1,
		"col_xuat" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0
	);
?>
	.col_diachi, .col_dieutri{display:none;}	
<?php }
elseif($_SESSION['tg_login_level']==14){
	$_SESSION['quyen'] = array(
		"col_phone" => 0,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_str" => 1,
		"col_chinh" => 0,
		"col_xuatnam" => 0,
		"col_xuatnu" => 0,
		"col_xuattatca" => 0,
		"col_upload"=> 1,
		"col_xuat" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0
	);
?>
	.col_diachi, .col_dieutri{display:none;}	
<?php }
	// tuvan nam khoa  ko thay sdt 
elseif($_SESSION['tg_login_level']==100){
	$_SESSION['quyen'] = array(
		"col_phone" => 1,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_thaotac" => 1, 
		"col_str" => 1,
		"col_chinh" => 0,
		"col_xuatnam" => 0,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0
	);	
?>
	.col_diachi, .col_dieutri{display:none;}	
<?php }
elseif($_SESSION['tg_login_level']==101){
	$_SESSION['quyen'] = array(
		"col_phone" => 1,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 1,
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 1,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"col_upload"=> 1,
		"col_xuat" => 1,
		"Nguon_timkiem" => 1,
		"str_timkiem" => 1,
		"tick_den" => 1
	);	
?>
	.col_diachi, .col_dieutri{display:none;}

<?php
// tuvan nam khoa  ko  chinh dc so dien thoai F
 }elseif($_SESSION['tg_login_level']==15){
	$_SESSION['quyen'] = array(
		"col_phone" => 1,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_thaotac" => 1, 
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 0,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0,
		"col_upload" => 1
	);	
	?>
	.col_diachi, .col_dieutri{display:none;}
<?php //to truong face
} elseif($_SESSION['tg_login_level']==30){
	$_SESSION['quyen'] = array(
		"col_phone" => 1,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 1,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"col_upload"=> 1,
		"col_xuat" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0
	);	
	?>
	.col_diachi, .col_dieutri{display:none;}
<?php
} //tuvan facebook
elseif($_SESSION['tg_login_level']==31){
	$_SESSION['quyen'] = array(
		"col_phone" => 1,
		"col_them" => 1,
		"col_xoa" => 0,
		"col_diachi" => 0,
		"col_dieutri" => 0, 
		"col_den" => 0,
		"col_thaotac" => 1, 
		"col_str" => 1,
		"col_chinh" => 1,
		"col_xuatnam" => 0,
		"col_xuatnu" => 1,
		"col_xuattatca" => 1,
		"Nguon_timkiem" => 0,
		"str_timkiem" => 0,
		"tick_den" => 0,
	);	
	?>
	.col_diachi, .col_dieutri{display:none;}
<?php
} 
	?>



 



</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ProAdmin</title>

<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->
  
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/accordionmenu.css" type="text/css" media="screen" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />

<script>
	$(document).ready(function() 
	{	
		setTimeout(hieuchinh,500);		
	});
	
	function hieuchinh()
	{
		var h1 = $("#leftcolumn").height();
		var h2 = $("#content").height();
		var m = h1;
		if (h2 > h1) m = h2;
		$("#leftcolumn").height(m+41);
		$("#content").height(m);
		
	}
</script>

</head>
<body>
<?php include "upload-ajax/index.php"?>
<?php include "nhaclich/index.php"?>
<!--// Horisontal submenu edit starts -->
<div style="float:left;color:white;position:absolute;
	height:26px;
	z-index:5;
	left: 10px;
	top: 77px;
	right:0px;
"> 
  <a style="color:white" href="javascript:history.go(-1)"><img style="vertical-align:text-bottom" src="images/goback.png" width="18" height="17" /> Tr??? V???</a> &nbsp; <a style="color:white" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"><img  style="vertical-align:text-bottom" src="images/refresh.png" width="18" height="17" /> L??m m???i</a>
  
&nbsp; <a style="color:white" target="_blank" href="https://www.google.com/maps/dir//425+Nguy%E1%BB%85n+V%C4%83n+Lu%C3%B4ng,+ph%C6%B0%E1%BB%9Dng+12,+Ho+Chi+Minh+City,+Ho+Chi+Minh,+Vietnam/@10.7519923,106.6325423,17z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x31752e812a15f315:0x4468839ed3bcce6!2m2!1d106.634731!2d10.751987"><img  style="vertical-align:text-bottom" src="images/chiduong.png" width="18" height="17" /> Ch??? ???????ng</a>  
</div>
<div class="bodytext" id="submenu"> 
  <marquee style="color:#FFF" scrolldelay="200">Ch??c m???y p?? m???t ng??y l??m vi???c vui v???. ??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ??? ???  </marquee>
</div>

<!--// Horisontal submenu edit ends -->
<!--// Logo edit starts -->

<div id="logo">
  <div align="center">
    <img src="images/logo.png" alt="logo" style="  width: 80px;  margin-top: 5px;height:50px;margin-left:-140px" />
  </div>
</div>

<!--// logo edit ends -->
<!--// Arrows edit starts -->

<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "Th??ng 1", "Th??ng 2", "Th??ng 3", "Th??ng 4", "Th??ng 5", "Th??ng 6", "Th??ng 7", "Th??ng 8", "Th??ng 9", "Th??ng 10", "Th??ng 11", "Th??ng 12" ]; 
var dayNames= ["Ch??? nh???t","Th??? hai","Th??? ba","Th??? t??","Th??? n??m","Th??? s??u","Th??? b???y"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year    
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var seconds = new Date().getSeconds();
	// Add a leading zero to seconds value
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);
	
setInterval( function() {
	// Create a newDate() object and extract the minutes of the current time on the visitor's
	var minutes = new Date().getMinutes();
	// Add a leading zero to the minutes value
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
	
setInterval( function() {
	// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
	// Add a leading zero to the hours value
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
	
}); 
</script>
<div class="clock">
<div id="Date"></div>

<ul>
	<li id="hours"> </li>
    <li id="point">:</li>
    <li id="min"> </li>
    <li id="point">:</li>
    <li id="sec"> </li>
</ul>

</div>


<div class="bodytext" id="hello">
<div style="float:left">
Ch??o B??c S?? : <span style="color:#1c9d51;font-size:18px"><?=$_SESSION['tg_login_user']?>  </span>
  <br />
    
    <a href="main.php?p=tk_doi">?????i M???t Kh???u</a> | <a href="thoat.php">Tho??t</a>
</div>
<div style="float:right;width:63px;margin-right:10px;">
 <img src="images/<?=$_SESSION['tg_login_user']?>.jpg" alt="user_icon" width="60" height="60" border="0" style="border-radius:36px;" />
</div>
</div>
<!--// arrows edit ends -->



<div style="display: none;" class="bodytext" id="dropdown">

		
	 
<div class="clear"> </div>
</div>
<div id="content"> 
<?php 
					switch ($p)
						{	
							case "dk_xem":
								include "dk_xem.php";
								break;
														
							case "pa_xem":
								include "pa_xem.php";
								break;
							case "pa_chinh":
								include "pa_chinh.php";
								break;
							case "pa_them":
								include "pa_them.php";
								break;

							case "tb_xem":
								include "tb_xem.php";
								break;
							case "tb_chinh":
								include "tb_chinh.php";
								break;
							case "tb_them":
								include "tb_them.php";
								break;

							case "dh_xem":
								include "dh_xem.php";
								break;
							case "dh_chinh":
								include "dh_chinh.php";
								break;
							case "dh_them":
								include "dh_them.php";
								break;

							case "tk_xem":
								include "tk_xem.php";
								break;
							case "tk_mk":
								include "tk_mk.php";
								break;
							case "tk_cv":
								include "tk_cv.php";
								break;
							case "tk_doi":
								include "tk_doi.php";
								break;
							case "tk_them":
								include "tk_them.php";
								break;

							case "sl_xem":
								include "sl_xem.php";
								break;
							case "sl_chinh":
								include "sl_chinh.php";
								break;
							case "sl_them":
								include "sl_them.php";
								break;

							case "tt_xem":
								include "tt_xem.php";
								break;
							case "tt_chinh":
								include "tt_chinh.php";
								break;
							case "tt_them":
								include "tt_them.php";
								break;								
							
							case "ch_xem": 
								include "ch_xem.php";
								break;
							case "ch_chitiet": 
								include "ch_chitiet.php";
								break;							      
							case "ch_xoa": 
								include "ch_xoa.php";
								break;

							case "tl_chitiet": 
								include "tl_chitiet.php";
								break;							      
							case "tl_xoa": 
								include "tl_xoa.php";
								break;	

							case "option_xem":
								include "option_xem.php";
								break;

							default :
								include "content.php";
								break;
						}
			?> 
 
<div style="clear:both"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr style="border:1px solid #1c9d51" />
<div style="padding:23px;  
  color: #1c9d51;
  text-transform: uppercase;
  font-weight: bold;  background-color: #dfdfdf;
  background: -moz-linear-gradient(top, #fff, #dfdfdf 50%, #cecece );
  background: -webkit-gradient(linear, left top, left bottom, from(#fff), color-stop(0.5, #dfdfdf), to(#cecece) );"><center>
<p style="text-shadow:0px 3px 2px #ccc;font-size:23px" >???ng d???ng web qu???n l?? kh??ch h??ng</p><br />
</center></div>
</div>
<!--
<div style="background:brown;width:99%;color:white;padding:10px;position:fixed;bottom:0;right:0;z-index:10000;opacity:0.9;">
Nh???p <span style="text-transform:uppercase;text-decoration:underline">NGAY SAU KHI ?????T H???N</span> s??? gi??p S???p Si??u v?? ph??ng m???ng bi???t ???????c t??nh h??nh v?? c?? nh???ng ??i???u ch???nh th??ch h???p ????? gi??p t?? v???n hi???u qu??? h??n.<br />
Hi???u ???????c th???i gian c???a t?? v???n l?? eo h???p, n??n khi v???a ?????t h???n ???????c 1 kh??ch, t?? v???n <span style="text-transform:uppercase;text-decoration:underline">ch??? c???n l??u m?? v?? t??n kh??ch</span> sau ???? nh???n Enter, ch??? m???t 5 gi??y,
cu???i ng??y m???i c???p nh???t nh???ng th??ng tin c??n l???i

</div>
-->
</body>

<!-- Mirrored from jannek.fi/themeforest/proadmin/ by HTTrack Website Copier/3.x [XR&CO'2008], Wed, 26 Nov 2008 20:37:11 GMT -->
</html>

