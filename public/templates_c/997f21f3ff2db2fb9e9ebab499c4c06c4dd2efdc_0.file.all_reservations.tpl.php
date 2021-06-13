<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-06 21:16:35
  from 'C:\xampp\htdocs\pizza\app\views\all_reservations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bd1f1310eb50_06430354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '997f21f3ff2db2fb9e9ebab499c4c06c4dd2efdc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\all_reservations.tpl',
      1 => 1623006977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bd1f1310eb50_06430354 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154593244560bd1f13103016_79525967', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_154593244560bd1f13103016_79525967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_154593244560bd1f13103016_79525967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">

         

            <h3>Wszystkie zamówienia</h3>

            <section>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
delete_reservation" >
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Nazwa</th>
                                                    <th>Cena</th>
                                                    <th>Adres</th>
                                                    <th>Imię i nazwisko</th>
                                                    <th>Nr telefonu</th>
                                                    <th>Anuluj rezerwacje</th>
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
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
usun_zamowienie/<?php echo $_smarty_tpl->tpl_vars['zamowienie']->value["id_zamowienia"];?>
" class="button" value="<?php echo $_smarty_tpl->tpl_vars['zamowienie']->value["id_zamowienia"];?>
" id="id_zamowienia" name="id_zamowienia" > Anuluj zamówienie/Zrealizuj zamówienie </a></td></tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
                                    </tbody>

                            </table>      
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
