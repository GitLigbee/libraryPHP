<?php 
$dir = dirname(__FILE__);
require $dir.'/classes/PHPExcel.php';
require $dir.'/mysqldb.class.php';
$mysql = mysqldb::getInsance();
$sql = "select * from guest";
$arr = $mysql->get_all($sql);

$excel = new PHPExcel();
//获得当前活动sheet对象
$sheet = $excel->getActiveSheet();
$sheet->setTitle("demo");
$index = 1;
$sheet->setCellValue("A".$index,"phone")->setCellValue("B".$index,"connect")->setCellValue("C".$index,"name")->setCellValue("D".$index,"school")->setCellValue("E".$index,"type")->setCellValue("F".$index,"time");
foreach ($arr as $key => $value) {
	$index++;
	$sheet->setCellValue("A".$index,$value["phone"])->setCellValue("B".$index,$value["connect"])->setCellValue("C".$index,$value["name"])->setCellValue("D".$index,$value["school"])->setCellValue("E".$index,$value["type"])->setCellValue("F".$index,$value["time"]);
}
$write = PHPExcel_IOFactory::createWriter($excel,"Excel2007");
//保持excel文件
$write->save($dir."/demo.xlsx");