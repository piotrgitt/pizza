<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-08 16:43:38
  from 'C:\xampp\htdocs\pizza\app\views\front_page_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bf821aca9c43_73422194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca80c7f8bb329b9d244e846bcceb5d1df1cffecc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pizza\\app\\views\\front_page_view.tpl',
      1 => 1623011137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf821aca9c43_73422194 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37686155060bf821aca5529_32733373', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_37686155060bf821aca5529_32733373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_37686155060bf821aca5529_32733373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <!-- Banner -->
        <section id="banner">
            
                <div class="content">
                    
                        <header>
                            
                                <h2>Pizza Gabana</h2>
                                <p>Pieniądze szczęścia nie dają, <br />
                                ale można za nie kupić pizze</p>
                        </header>
                        <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/logo.png" alt="" /></span>
                </div>

                <a href="#one" class="goto-next scrolly">Next</a>
        </section>

<!-- One -->
        <section id="one" class="spotlight style1 bottom">
                <span class="image fit main"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/front1.jpg" alt="" /></span>
                <div class="content">
                        <div class="container">
                                <div class="row">
                                        <div class="col-4 col-12-medium">
                                                <header>
                                                        <h2>Pizzeria Gabana </h2>
                                                        <p>Nasza oferta zawiera szeroką gamę włoskich pizz </p>
                                                </header>
                                        </div>
                                        <div class="col-4 col-12-medium">
                                                <p>W Pizzeri Gabana najważniejsza jest dla nas atmosfera i smak – staramy się, by każdy gość poczuł klimat słonecznej Italii, a potrawy smakowały jak u Mammy!</p>
                                        </div>
                                        <div class="col-4 col-12-medium">
                                                <p>Zapraszamy do naszych ciepłych, rustykalnych wnętrz. Jeżeli nie macie czasu, aby rozkoszować się nastrojem naszych pizzerii a macie ochotę na pyszne jedzenie możecie je u nas zamówić – przez telefon lub Internet. </br> </br>
                                                    
                                                    Zapraszamy
                                                
                                                </p>
                                        </div>
                                </div>
                        </div>
                </div>
                <a href="#two" class="goto-next scrolly">Next</a>
        </section>



<!-- six -->
        <section id="five" class="wrapper style2 special fade">
                <div class="container">
                        <header>
                                <h2>Złóż zamówienie!</h2>
                                <p>Online</p>
                        </header>

                        <footer class="fit primary">
                                <ul class="actions special">
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="button">Złóż zamówienie</a></li>
                                </ul>
                        </footer>       
                </div>
        </section>
<?php
}
}
/* {/block 'content'} */
}
