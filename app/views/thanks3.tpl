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
                    <h2>Dziękujemy za zarejestrowanie się</h2>
            </header>
            <h3> Zaloguj się: </h3>
            
            
            <hr>
            <div class="col-12">

                <a href="{$conf->action_root}login" class="button primary">Login</a>  
            </div>

                        
                        
        </div>
</div>
{/block}