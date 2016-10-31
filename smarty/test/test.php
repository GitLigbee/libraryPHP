<?php

require_once '../smarty/Smarty.class.php';

$smarty = new Smarty();

$smarty->left_delimiter="{";
$smarty->right_delimiter="}";
$smarty->template_dir="tpl";
$smarty->compile_dir="template_c";
$smarty->cache_dir="cache";
$smarty->caching=true;
$smarty->cache_lifetime=1;


function test($paramas){
    $p1=$paramas['p1'];
    $p2=$paramas['p2'];
    return $p1*$p2;
}

$smarty->registerPlugin('function','f_test','test');


$smarty->assign('code','abc');
$smarty->display('test.html');

?>