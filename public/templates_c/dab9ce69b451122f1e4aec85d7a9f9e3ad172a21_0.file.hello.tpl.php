<?php /* Smarty version 3.1.22-dev/16, created on 2015-03-22 20:37:23
         compiled from "/www/framework/src/Templates/hello.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1887157400550f19f3465a49_97104519%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dab9ce69b451122f1e4aec85d7a9f9e3ad172a21' => 
    array (
      0 => '/www/framework/src/Templates/hello.tpl',
      1 => 1427053041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1887157400550f19f3465a49_97104519',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/16',
  'unifunc' => 'content_550f19f37001c0_89039186',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_550f19f37001c0_89039186')) {
function content_550f19f37001c0_89039186 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1887157400550f19f3465a49_97104519';
?>


<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Custom CSS -->
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </head>
    <body style="padding-top: 30px;padding-left: 30px;">
        <h1>FRAMEWORK ALEJANDRO RUIZ</h1>
        <div class="row">
          <div class="col-sm-4">
            <p><strong>Menú</strong></p>
            <ul class="nav nav-pills nav-stacked">
              <li><a href="http://framework.dev/home/">Método por defecto</a></li>
              <li><a href="http://framework.dev/home/response">Método con Response</a></li>
              <li><a href="http://framework.dev/home/json-response">Método que usa Json Response</a></li>
              <li><a href="http://framework.dev/home/twig">Método que usa Twig</a></li>
              <li  class="active"><a href="http://framework.dev/home/smarty">Método que usa Smarty</a></li>
              <li><a href="http://framework.dev/home/service1">Método que usa Servicio simple del Container</a></li>
              <li><a href="http://framework.dev/home/service2">Método que usa Servicio con dependencias</a></li>
              <li><a href="http://framework.dev/home/clasification">Método que accede a la BBDD</a></li>
                <li><a href="http://framework.dev/home/i18n">Método que usa i18n</a></li>
            </ul>
          </div>
          <div class="col-sm-8">
                <h2>Smarty Page, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</h2>
            </div>
        </div>
    </body>
</html><?php }
}
?>