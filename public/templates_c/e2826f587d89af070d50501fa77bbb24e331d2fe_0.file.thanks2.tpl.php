<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-06 17:52:04
  from 'C:\xampp\htdocs\pizza\app\views\thanks2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bcef24e27ca5_12485468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2826f587d89af070d50501fa77bbb24e331d2fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\thanks2.tpl',
      1 => 1622993551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bcef24e27ca5_12485468 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194125974160bcef24e252c8_79141833', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_194125974160bcef24e252c8_79141833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_194125974160bcef24e252c8_79141833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                    <h2>Dziękujemy za złożenie zamówienia</h2>
            </header>
            <h3> Powróć do strony głównej: </h3>
            
            
            <hr>
            <div class="col-12">

                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
show_front_page" class="button primary">Strona główna</a>  
            </div>

                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
