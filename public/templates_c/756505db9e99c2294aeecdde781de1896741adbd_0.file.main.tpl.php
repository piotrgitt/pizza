<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-22 21:32:31
  from 'C:\xampp\htdocs\amelia\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600b365fe04bd1_77945928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756505db9e99c2294aeecdde781de1896741adbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\templates\\main.tpl',
      1 => 1611347550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600b365fe04bd1_77945928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/lib/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/lib/assets/css/noscript.css" /></noscript>
    <?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/lib/assets/css/main.css
     
</head>
<body class="is-preload">
    
    <!-- Header -->
    <div id="page-wrapper"> 
        <header id="header">
                <h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/public/index.php">Kalkulator kredytowy</a></h1>
                <nav id="nav">
                        <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/public/index.php">Strona główna</a></li>
                        </ul>
                </nav>
        </header>

        <!-- Header2 -->
        <div id="main" class="wrapper style1">
            <div class="container">
                <header class="major">
                    <h2>Kalkulator kredytowy</h2>
                    <p>Oprocentowanie</p>
                </header>


                <!-- content -->    
                <div class="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_562657696600b365fe03f50_74577703', 'content');
?>

                </div>
            </div> 
        </div>
                
                
         <!-- Messages -->       
            
                
        <!-- Footer-->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Piotr Herdzina. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>
    </div>
     
                
   
    
    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'content'} */
class Block_562657696600b365fe03f50_74577703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_562657696600b365fe03f50_74577703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
