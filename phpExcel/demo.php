<?php 
$dir = dirname(__FILE__);
require $dir.'/classes/PHPExcel.php';
$excel = new PHPExcel();
//获得当前活动sheet对象
$sheet = $excel->getActiveSheet();
//给当前sheet设置名称
$sheet->setTitle("demo");
//给当前sheet填充数据
$sheet->setCellValue("A1","name")->setCellValue("B1","phone");
$sheet->setCellValue("A2","ton")->setCellValue("B2","123");
/*$arr = array(
		array(),
		array("","name","phone"),
		array("","yili","134"),
		array("","anmy","183")
	);
$sheet->fromArray($arr);*/
//安装指定格式生成excel文件，参数为excel对象
$write = PHPExcel_IOFactory::createWriter($excel,"Excel2007");
//保持excel文件
$write->save($dir."/demo.xlsx");


 ?>