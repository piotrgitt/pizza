<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 15:24:27
  from 'C:\xampp\htdocs\pizza\app\views\thanks3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c6070bcd94c4_48114355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8e647178bd57f252251bcf94548ac67226b98da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\thanks3.tpl',
      1 => 1623590423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6070bcd94c4_48114355 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165123371060c6070bcd6504_94772726', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_165123371060c6070bcd6504_94772726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_165123371060c6070bcd6504_94772726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                    <h2>Dziękujemy za zarejestrowanie się</h2>
            </header>
            <h3> Zaloguj się: </h3>
            
            
            <hr>
            <div class="col-12">

                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" class="button primary">Login</a>  
            </div>

                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
