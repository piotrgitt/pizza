<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 15:40:05
  from 'C:\xampp\htdocs\pizza\app\views\register_employee.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c60ab509f092_36552498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a828756ac0590975aa634915527df11ae9189c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\register_employee.tpl',
      1 => 1623591590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c60ab509f092_36552498 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41568741060c60ab509c083_90175786', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_41568741060c60ab509c083_90175786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_41568741060c60ab509c083_90175786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
                <header class="major">
                        <h2>Rejestracja</h2>
                </header>  
        <header class="minor">
                        <h3>Rejestracja nowego PRACOWNIKA</h3>
                </header>  
            

        <!-- Register form -->       
        
        
        <section>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerEmployee">
                        <div class="row gtr-uniform gtr-50">

                                
                                <section id="five" class="wrapper style special fade">
                                    <div class="container">
                                        <header>
                                            <div style="max-width: 35%;margin-left: 32.5%">
                                            <ul class="actions stacked" >
                                                    <li><input type="text" name="name" id="name" value="" placeholder="Imię" /></li>
                                                    <li><input type="email" name="email" id="email" value="" placeholder="Email" /></li>
                                                    <li><input type="text" name="tel" id="tel" value="" placeholder="+48" /></li>
                                                    <li><input type="password" name="password" id="password" value="" placeholder="Hasło" /></li>
                                                    <li><input type="password" name="password2" id="password2" value="" placeholder="Powtórz hasło" /></li>
                                            </ul>
                                            </div>
                                        </header>

                                    </div>
                                </section>  
                                
                                <section id="five" class="wrapper style special fade">
                                    <div class="container">
                                        <header>
                                            <ul class="actions stacked" >
                                                    <li><input  type="submit" value="Zarejestruj" class="primary" /></li>
                                            </ul>
                                        </header>

                                    </div>
                                </section>  
                            
                            

                                              
                        </div>
                </form>
        </section>


                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
