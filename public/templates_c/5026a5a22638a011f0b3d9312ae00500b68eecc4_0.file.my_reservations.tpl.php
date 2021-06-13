<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 16:08:16
  from 'C:\xampp\htdocs\pizza\app\views\my_reservations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c61150f22741_46728435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5026a5a22638a011f0b3d9312ae00500b68eecc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\my_reservations.tpl',
      1 => 1623593293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c61150f22741_46728435 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184585770060c61150f161a2_84758575', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_184585770060c61150f161a2_84758575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_184585770060c61150f161a2_84758575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">

         

            <h3>Koszyk</h3>

            <section>
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Przedmiot</th>
                                                    <th>Cena</th>
                                                    <th>Usuń z koszyka</th>
                                            </tr>
                                    </thead>
                                    <tbody><?php $_smarty_tpl->_assignInScope('suma', NULL);?>
                                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservations']->value, 'reservation');
$_smarty_tpl->tpl_vars['reservation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->do_else = false;
?>
                                                <tr><td><?php echo $_smarty_tpl->tpl_vars['reservation']->value["service_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['reservation']->value["service_price"];?>
</td><?php $_smarty_tpl->_assignInScope('suma', + $_smarty_tpl->tpl_vars['suma']->value+$_smarty_tpl->tpl_vars['reservation']->value["service_price"]);?><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
delete_reservation/<?php echo $_smarty_tpl->tpl_vars['reservation']->value["id_reservation"];?>
" class="button" value="<?php echo $_smarty_tpl->tpl_vars['reservation']->value["id_reservation"];?>
" id="id_reservation" name="id_reservation" > Usuń przedmiot </a></td></tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                                
                                                <tr>
                                                            <td>SUMA:</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['suma']->value;?>
</td>
                                                            <td>PLN <td>
                                                </tr>
                                    </tbody>
                            </table> 
                                <div style="max-width: 35%;margin-left: 5%">
                                    <ul class="actions stacked" >
                                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
zamow" >
                                            Wpisz adres dostawy:
                                            <br>
                                            <li><input type="text" name="adres" id="adres" value="" placeholder="np. Katowice, ul. Sienkiewicza 31/2" /></li>
                                            <br>
                                            <input type="submit" value="ZAMÓW" class="primary" />
                                        </form>
                                    </ul>
                                    
                                    
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
