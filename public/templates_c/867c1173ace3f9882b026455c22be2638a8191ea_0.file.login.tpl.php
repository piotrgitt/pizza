<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-28 14:17:06
  from 'C:\xampp\htdocs\haircutter\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603b97d22a0ae1_45309959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '867c1173ace3f9882b026455c22be2638a8191ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\login.tpl',
      1 => 1614518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603b97d22a0ae1_45309959 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1493549092603b97d229c374_74169844', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_1493549092603b97d229c374_74169844 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1493549092603b97d229c374_74169844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                    <h2>Logowanie</h2>
            </header>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" >
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                            <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" placeholder="login"/>
                    </div>
                    <div class="col-6 col-12-xsmall">
                            <input type="password" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" placeholder="password" />
                    </div>   
                </div>  
            <div class="col-12">    
                        <input type="submit" value="Zaloguj" class="primary" />           
            </div>    
                
            </form>           
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
