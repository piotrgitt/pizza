<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-06 16:45:12
  from 'C:\xampp\htdocs\pizza\app\views\thanks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bcdf7807c374_49358409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be2d4670805638ddb7007cdebc91a0e40b9692a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\thanks.tpl',
      1 => 1622990706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bcdf7807c374_49358409 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28114950960bcdf780790b0_10559078', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_28114950960bcdf780790b0_10559078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_28114950960bcdf780790b0_10559078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                    <h2>Dodano do koszyka</h2>
            </header>
            <h3> Czy chcesz jeszcze coś dobrać do zamówienia? </h3>
            
            
            <hr>
            <div class="col-12">

                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="button primary">TAK</a>  
                <hr>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
my_reservations" class="button primary">NIE  -  idz do koszyka</a> 
            </div>

                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
