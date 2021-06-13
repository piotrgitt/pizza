<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-06 12:55:39
  from 'C:\xampp\htdocs\pizza\app\views\gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bca9abd3ba05_98264896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09be9eef9c1b3b32fd6f2ea78f3ef78eb19d2527' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\gallery.tpl',
      1 => 1622976936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bca9abd3ba05_98264896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['role']->value == "user") {?>
  <?php $_smarty_tpl->_assignInScope('name', 'main_user_login.tpl');
} elseif ($_smarty_tpl->tpl_vars['role']->value == "root") {?>
  <?php $_smarty_tpl->_assignInScope('name', 'main_admin_login.tpl');
} else { ?>
   <?php $_smarty_tpl->_assignInScope('name', 'main.tpl');?> 
<?php }?>
 



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134593027960bca9abd37510_77528418', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_134593027960bca9abd37510_77528418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134593027960bca9abd37510_77528418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
                <header class="major">
                        <h2>Galeria</h2>
                </header>
                <!-- Image -->
                    <section>
                            <h3>Galeria</h3>
                            <div class="box alt">
                                    <div class="row gtr-50 gtr-uniform">
                                            <div class="col-12"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal5.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal1.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal2.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal3.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal4.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal7.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal6.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal8.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal9.jpg" alt="" /></span></div>
                  
          
                                    </div>
                            </div>
                    </section>
                                                
                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
