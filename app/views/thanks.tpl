{if $role=="user" }
  {$name = 'main_user_login.tpl'}
{else if $role=="root"}
  {$name = 'main_admin_login.tpl'}
{else}
   {$name = 'main.tpl'} 
{/if}
 {extends $name}



{block name=content}



<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                    <h2>Dodano do koszyka</h2>
            </header>
            <h3> Czy chcesz jeszcze coś dobrać do zamówienia? </h3>
            
            
            <hr>
            <div class="col-12">

                <a href="{$conf->action_root}reservation" class="button primary">TAK</a>  
                <hr>
                <a href="{$conf->action_root}my_reservations" class="button primary">NIE  -  idz do koszyka</a> 
            </div>

                        
                        
        </div>
</div>
{/block}