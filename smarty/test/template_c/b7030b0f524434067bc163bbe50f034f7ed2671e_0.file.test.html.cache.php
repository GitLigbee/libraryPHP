<?php /* Smarty version 3.1.27, created on 2015-12-22 18:12:26
         compiled from "tpl\test.html" */ ?>
<?php
/*%%SmartyHeaderCode:221785679220a88c2a1_15916906%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7030b0f524434067bc163bbe50f034f7ed2671e' => 
    array (
      0 => 'tpl\\test.html',
      1 => 1439559656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221785679220a88c2a1_15916906',
  'variables' => 
  array (
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5679220ac2dce9_10730428',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5679220ac2dce9_10730428')) {
function content_5679220ac2dce9_10730428 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '221785679220a88c2a1_15916906';
echo $_smarty_tpl->tpl_vars['code']->value;?>

<br/>
<?php echo test(array('p1'=>100,'p2'=>200),$_smarty_tpl);

}
}
?>