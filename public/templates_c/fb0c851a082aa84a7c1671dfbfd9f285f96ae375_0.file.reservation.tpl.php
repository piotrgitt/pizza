<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 15:58:58
  from 'C:\xampp\htdocs\pizza\app\views\reservation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c60f22c4eb78_73682975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb0c851a082aa84a7c1671dfbfd9f285f96ae375' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\reservation.tpl',
      1 => 1623592373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c60f22c4eb78_73682975 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164976074960c60f22c460e3_39942147', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_164976074960c60f22c460e3_39942147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_164976074960c60f22c460e3_39942147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                    <h2>Rezerwacja</h2>
            </header>  

            <h3>Wybierz przedmiot</h3>
            <section>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
process" >
                    <!-- Table -->
                    <fieldset>
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Nazwa</th>
                                                    <th>Cena</th>
                                                    <th>     </th>
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
</td><td><div class="pretty p-default p-round p-thick"><input type="radio" name="service" id="service" value="<?php echo $_smarty_tpl->tpl_vars['service']->value["id_service"];?>
" /><div class="state p-danger"><label> </label></div></div></td></tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                                    </tbody>
                            </table>
                                    
                                    
                    </div>        
                    </fieldset>
                    <div class="col-12"> 
                        <input type="submit" value="Dodaj do koszyka" class="primary" prompt="wpisz szukane wyrazy: " />
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
