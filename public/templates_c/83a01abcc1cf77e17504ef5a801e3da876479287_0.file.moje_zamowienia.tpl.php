<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-06 21:00:04
  from 'C:\xampp\htdocs\pizza\app\views\moje_zamowienia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bd1b34d93045_13626695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83a01abcc1cf77e17504ef5a801e3da876479287' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\moje_zamowienia.tpl',
      1 => 1623004412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bd1b34d93045_13626695 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102219489660bd1b34d89857_69074221', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_102219489660bd1b34d89857_69074221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_102219489660bd1b34d89857_69074221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">

         

            <h3>Moje zamowienia</h3>

            <section>
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    
                                                    <th>Nazwa</th>
                                                    <th>Cena</th>
                                                    <th>Adres</th>
                                                    <th>Zamawiający</th>
                                                    <th>Nr tel.</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zamowienia']->value, 'zamowienie');
$_smarty_tpl->tpl_vars['zamowienie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['zamowienie']->value) {
$_smarty_tpl->tpl_vars['zamowienie']->do_else = false;
?>
                                                <tr><td><?php echo $_smarty_tpl->tpl_vars['zamowienie']->value["nazwa"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['zamowienie']->value["cena"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['zamowienie']->value["adres"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['zamowienie']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['zamowienie']->value["phone_number"];?>
</td></tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

                                    </tbody>
                            </table> 

                    </div>
        </section>                                           
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
