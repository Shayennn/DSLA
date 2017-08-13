<?php
function randomphonenumber(){
	return '0'.rand(800000000,899999999);
}
function datetranslate($date)
{
    $monthlist=[
        '01'=>'มกราคม',
        '02'=>'กุมภาพันธ์',
        '03'=>'มีนาคม',
        '04'=>'เมษายน',
        '05'=>'พฤษภาคม',
        '06'=>'มิถุนายน',
        '07'=>'กรกฎาคม',
        '08'=>'สิงหาคม',
        '09'=>'กันยายน',
        '10'=>'ตุลาคม',
        '11'=>'พฤศจิกายน',
        '12'=>'ธันวาคม',
    ];
    $ts=strtotime($date);
    $return['day']=date('j', $ts);
    $return['month']=$monthlist[date('m', $ts)];
    $return['year']=543+date('Y', $ts);
    return $return;
}

header('Content-type: image/png');
date_default_timezone_set("Asia/Bangkok");

if (!isset($_GET['stuid'])||$_GET['stuid']=='') {
    $_GET['stuid']='09999';
}
if (!isset($_GET['name'])||$_GET['name']=='') {
    $_GET['name']='นาย ขยัน หมันเพียร';
}
if (!isset($_GET['class_a'])||$_GET['class_a']=='') {
    $_GET['class_a']='1';
}
if (!isset($_GET['class_b'])||$_GET['class_b']=='') {
    $_GET['class_b']='10';
}
if (!isset($_GET['attachment'])||$_GET['attachment']=='') {
    $_GET['attachment']='-';
}
if (!isset($_GET['tel'])||$_GET['tel']=='') {
    $_GET['tel']=randomphonenumber();
}
if (!isset($_GET['writedate'])||$_GET['writedate']=='') {
    $_GET['writedate']=date('Y-m-d');
}
if (!isset($_GET['latype'])||$_GET['latype']=='') {
    $_GET['latype']='ป่วย';
}
if (!isset($_GET['reason'])||$_GET['reason']=='') {
    $_GET['reason']='ตัวร้อน ไข้ขึ้น';
}
if (!isset($_GET['lastart'])||$_GET['lastart']=='') {
    $_GET['lastart']=date('Y-m-d', strtotime("-2 days"));
}
if (!isset($_GET['laend'])||$_GET['laend']=='') {
    $_GET['laend']=date('Y-m-d', strtotime("-1 days"));
}
if (!isset($_GET['parent'])||$_GET['parent']=='') {
    $_GET['parent']='นาย ประหยัด หมั่นเพียร';
}
if (!isset($_GET['parent_comment'])||$_GET['parent_comment']=='') {
    $_GET['parent_comment']='เห็นสมควรให้ลา';
}
if (!isset($_GET['adv'])||$_GET['adv']=='') {
    $_GET['adv']='อาจารย์ อัมรินทร์ อินทร์อยู่';
}

$lacount=(strtotime($_GET['laend'])-strtotime($_GET['lastart']))/(3600*24)+1;

$_GET['writedate']=datetranslate($_GET['writedate']);
$_GET['lastart']=datetranslate($_GET['lastart']);
$_GET['laend']=datetranslate($_GET['laend']);

$font_path = 'THSarabunNew.ttf';
$jpg_image = imagecreatefromjpeg('dsla.jpg');
$black = imagecolorallocate($jpg_image, 0, 0, 0);

imagettftext($jpg_image, 44, 0, 560, 967, $black, $font_path, $_GET['attachment']);
imagettftext($jpg_image, 44, 0, 541, 1137, $black, $font_path, $_GET['stuid']);
imagettftext($jpg_image, 44, 0, 1828, 1052, $black, $font_path, $_GET['class_a']);
imagettftext($jpg_image, 44, 0, 1953, 1052, $black, $font_path, $_GET['class_b']);
imagettftext($jpg_image, 44, 0, 683, 1052, $black, $font_path, $_GET['name']);
imagettftext($jpg_image, 44, 0, 1041, 1801, $black, $font_path, $_GET['name']);
imagettftext($jpg_image, 44, 0, 1234, 1384, $black, $font_path, $_GET['tel']);
imagettftext($jpg_image, 44, 0, 1448, 717, $black, $font_path, $_GET['writedate']['day']);
imagettftext($jpg_image, 44, 0, 1691, 717, $black, $font_path, $_GET['writedate']['month']);
imagettftext($jpg_image, 44, 0, 2094, 717, $black, $font_path, $_GET['writedate']['year']);
imagettftext($jpg_image, 44, 0, 497, 801, $black, $font_path, $_GET['latype']);
if ($_GET['latype']=='กิจ') {
    imagettftext($jpg_image, 70, 0, 1772, 1137, $black, $font_path, '/');
} else {
    imagettftext($jpg_image, 70, 0, 1197, 1137, $black, $font_path, '/');
}
imagettftext($jpg_image, 44, 0, 474, 1220, $black, $font_path, $_GET['reason']);
imagettftext($jpg_image, 44, 0, 1762, 1220, $black, $font_path, $_GET['lastart']['day']);
imagettftext($jpg_image, 44, 0, 325, 1303, $black, $font_path, $_GET['lastart']['month']);
imagettftext($jpg_image, 44, 0, 713, 1303, $black, $font_path, $_GET['lastart']['year']);
imagettftext($jpg_image, 44, 0, 985, 1303, $black, $font_path, $_GET['laend']['day']);
imagettftext($jpg_image, 44, 0, 1234, 1303, $black, $font_path, $_GET['laend']['month']);
imagettftext($jpg_image, 44, 0, 1568, 1303, $black, $font_path, $_GET['laend']['year']);
imagettftext($jpg_image, 44, 0, 1954, 1303, $black, $font_path, $lacount);
imagettftext($jpg_image, 44, 0, 986, 1885, $black, $font_path, $_GET['parent_comment']);
imagettftext($jpg_image, 44, 0, 1041, 2053, $black, $font_path, $_GET['parent']);
imagettftext($jpg_image, 44, 0, 1041, 2302, $black, $font_path, $_GET['adv']);

imagepng($jpg_image);
imagedestroy($jpg_image);
