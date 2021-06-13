<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 16:05:13
  from 'C:\xampp\htdocs\pizza\app\views\pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c610992ef252_66233071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36705784d887cc8851906bf3823633b7c8e00f8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\pricing.tpl',
      1 => 1623592720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c610992ef252_66233071 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127319642660c610992e7d32_23849299', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_127319642660c610992e7d32_23849299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_127319642660c610992e7d32_23849299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
                <header class="major">
                        <h2>Menu</h2>
                </header>  
                <!-- Strzyżenie -->
                <section>
                        <header class="minor">
                                <h2>Pizze</h2>
                        </header>  
                    
                    
                        <div class="table-wrapper">
                                <table>
                                        <thead>
                                                <tr>
                                                      
                                                        <th>Nazwa</th>
                                                        <th>Cena</th>

                                                </tr>
                                        </thead>
                                        <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                                                <tr><td><?php echo $_smarty_tpl->tpl_vars['service']->value["service_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['service']->value["service_price"];?>
</td></tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                                        </tbody>

                                </table>
                        </div>
     
                </section> 
                <hr />
                
                
                
                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
