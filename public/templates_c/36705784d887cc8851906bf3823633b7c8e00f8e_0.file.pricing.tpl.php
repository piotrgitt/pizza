<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-06 13:12:09
  from 'C:\xampp\htdocs\pizza\app\views\pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bcad8942b7f7_82255442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36705784d887cc8851906bf3823633b7c8e00f8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\pricing.tpl',
      1 => 1622977893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bcad8942b7f7_82255442 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69467033960bcad8942ab57_18860165', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_69467033960bcad8942ab57_18860165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_69467033960bcad8942ab57_18860165',
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
                                                <tr>
                                                       
                                                    <td>Margharita<i>(Sos,ser)</i></td>
                                                        <td>28zł</td>

                                                </tr>
                                                <tr>
           
                                                        <td>Funghi<i>(sos,ser,pieczarki)</i></td>
                                                        <td>30zł</td>

                                                </tr>
                                                <tr>

                                                        <td>Cardinale<i>(sos,ser,szynka)</i></td>
                                                        <td>31zł</td>

                                                </tr>
                                                <tr>
          
                                                        <td>Hawaii<i>(sos,ser,szynka,ananas)</i></td>
                                                        <td>34zł</td>

                                                </tr>
                                                <tr>
                 
                                                        <td>Salami<i>(sos,ser,salami)</i></td>
                                                        <td>31zł</td>

                                                </tr>

                                        </tbody>

                                </table>
                        </div>
     
                </section> 
                <hr />
                
                
                <!-- Dodatki -->
                        <header class="minor">
                                <h2>Dodatki</h2>
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
                                                <tr>
                                                       
                                                        <td>Frytki(150g)</td>
                                                        <td>8zł</td>

                                                </tr>
                                                <tr>
           
                                                        <td>Frytki belgijskie(150g)</td>
                                                        <td>12zł</td>

                                                </tr>
                                                <tr>

                                                        <td>Sos<i>(czosnkowy,pomidorowy,barbecue)</i></td>
                                                        <td>3zł</td>

                                                </tr>
                                        </tbody>

                                </table>
                        </div>
                
                
     <!-- napoje -->
                        <header class="minor">
                                <h2>Napoje</h2>
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
                                                <tr>
                                                       
                                                        <td>Napój gazowany 500ml<i>(pepsi, cola, mirinda, sprite)</i></td>
                                                        <td>6zł</td>

                                                </tr>
                                                <tr>
           
                                                        <td>Herbata<i>(czarna, zielona, owocowa)</i></td>
                                                        <td>7zł</td>
                                                </tr>
                                                <tr>

                                                        <td>Kawa<i>(czarna, z mlekiem)</i></td>
                                                        <td>7zł</td>
                                                </tr>
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
