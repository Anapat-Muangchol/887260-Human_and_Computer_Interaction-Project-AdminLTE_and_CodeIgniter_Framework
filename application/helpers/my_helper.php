<?php

/*
* ดึงวันที่ปัจจุบัน ใช้แสดงในรายงาน
* OUTPUT 	:  วันที่ เดือน พ.ศ. ปัจจุบัน 	เช่น วันที่ 31 เดือน มีนาคม พ.ศ. 2559
*/
function get_fulldatenow_th() {
	$dd = date('d');
	if($dd=='01') { $dd='1'; }
	else if($dd=='02') { $dd='2'; }
	else if($dd=='03') { $dd='3'; }
	else if($dd=='04') { $dd='4'; }
	else if($dd=='05') { $dd='5'; }
	else if($dd=='06') { $dd='6'; }
	else if($dd=='07') { $dd='7'; }
	else if($dd=='08') { $dd='8'; }
	else if($dd=='09') { $dd='9'; }
	
	$mm = date('m');
	if($mm=='01') { $mm='มกราคม'; }
	else if($mm=='02') { $mm='กุมภาพันธ์'; }
	else if($mm=='03') { $mm='มีนาคม'; }
	else if($mm=='04') { $mm='เมษายน'; }
	else if($mm=='05') { $mm='พฤษภาคม'; }
	else if($mm=='06') { $mm='มิถุนายน'; }
	else if($mm=='07') { $mm='กรกฎาคม'; }
	else if($mm=='08') { $mm='สิงหาคม'; }
	else if($mm=='09') { $mm='กันยายน'; }
	else if($mm=='10') { $mm='ตุลาคม'; }
	else if($mm=='11') { $mm='พฤศจิกายน'; }
	else if($mm=='12') { $mm='ธันวาคม'; }
	
	$yy = date('Y')+543;
	return "วันที่ $dd เดือน $mm พ.ศ. $yy";
}

/*
* ดึงวันที่-เดือน-ค.ศ. ปัจจุบัน เพื่อไปใช้กับปฏิทิน datepicker
* OUTPUT 	: dd-mm-YYYY	เช่น 31-03-2016
*/
function get_nowdate($sp="-") {
	$yy = date('Y');
	$mm = date('m');
	$dd = date('d');
	return $dd.$sp.$mm.$sp.$yy;
}

/*
* ดึงวันที่-เดือน-พ.ศ. ปัจจุบัน เพื่อไปใช้กับปฏิทิน datepicker
* OUTPUT 	: dd-mm-YYYY	เช่น 31-03-2559
*/
function get_nowdate_th($sp="-") {
	$yy = date('Y')+543;
	$mm = date('m');
	$dd = date('d');
	return $dd.$sp.$mm.$sp.$yy;
}

/*
* แปลงวันที่ (ค.ศ.) จากปฏิทิน datepicker เพื่อลงฐานข้อมูล (ฐานข้อมูลเก็บเป็นปี ค.ศ. เช่น 2016-03-31)
* INPUT 	: dd/mm/YYYY	เช่น 31/03/2016
* OUTPUT 	: YYYY-mm-dd	เช่น 2016-03-31
*/
function split_dateform($date, $sp="-") {
	list($dd, $mm, $yy) = preg_split("[/|-]", $date);
	return $yy.$sp.substr('0'.$mm, -2).$sp.substr('0'.$dd, -2);
}

/*
* แปลงวันที่ (พ.ศ.) จากปฏิทิน datepicker เพื่อลงฐานข้อมูล (ฐานข้อมูลเก็บเป็นปี ค.ศ. เช่น 2016-03-31)
* INPUT 	: dd/mm/YYYY 	เช่น 31/03/2559
* OUTPUT 	: YYYY-mm-dd 	เช่น 2016-03-31
*/
function split_dateform_th($date, $sp="-") {
	list($dd, $mm, $yy) = preg_split("[/|-]", $date);
	$yy -= 543;
	return $yy.$sp.substr('0'.$mm, -2).$sp.substr('0'.$dd, -2);
}

/*
* แปลงวันที่ จากลงฐานข้อมูล (ฐานข้อมูลเก็บเป็นปี ค.ศ.) เพื่อไปใช้ในปฏิทิน datepicker (แบบ ค.ศ.)
* INPUT 	: YYYY-mm-dd 	เช่น 2016-03-31
* OUTPUT 	: dd/mm/YYYY 	เช่น 31/03/2016
*/
function split_datedb($date, $sp="-") {
	list($yy, $mm, $dd) = preg_split("[/|-]", $date);
	return $dd.$sp.$mm.$sp.$yy;
}

/*
* แปลงวันที่ จากลงฐานข้อมูล (ฐานข้อมูลเก็บเป็นปี ค.ศ.) เพื่อไปใช้ในปฏิทิน datepicker (แบบ พ.ศ.)
* INPUT 	: YYYY-mm-dd 	เช่น 2016-03-31
* OUTPUT 	: dd/mm/YYYY 	เช่น 31/03/2559
*/
function split_datedb_th($date, $sp="-") {
	list($yy, $mm, $dd) = preg_split("[/|-]", $date);
	$yy += 543;
	return $dd.$sp.$mm.$sp.$yy;
}

/*
* แปลงเลขอาราบิกเป็นเลขไทย
* INPUT 	: เลขอาราบิก 	เช่น 1,234
* OUTPUT 	: เลขไทย 	เช่น ๑,๒๓๔
*/
function convert_number2thai($num) {
	$arr = array(); $val="";
	$arr = str_split($num);
	for($i=0;$i<count($arr);$i++){
		switch($arr[$i]){
			case "0" : $val.="๐"; break;
			case "1" : $val.="๑"; break;
			case "2" : $val.="๒"; break;
			case "3" : $val.="๓"; break;
			case "4" : $val.="๔"; break;
			case "5" : $val.="๕"; break;
			case "6" : $val.="๖"; break;
			case "7" : $val.="๗"; break;
			case "8" : $val.="๘"; break;
			case "9" : $val.="๙"; break;
			default : $val.=$arr[$i]; break;
		}
	}
	return $val;
}

?>