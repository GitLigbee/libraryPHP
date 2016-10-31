<?php
    define('ROOT',__DIR__);
    require_once 'div_smarty.php';
    
    $tpl = new div_smarty();
    $tpl->assign('title','smarty');
    $tpl->assign('content','diy_smarty');
    $tpl->display('index.html');
?>