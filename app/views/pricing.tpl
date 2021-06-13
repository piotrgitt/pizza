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
                                                {foreach $services as $service}
                                                {strip}
                                                        <tr>
                                                            <td>{$service["service_name"]}</td>
                                                            <td>{$service["service_price"]}</td>
                                                            
                                                           
                                                        </tr>
                                                {/strip}
                                                {/foreach}    
                                        </tbody>

                                </table>
                        </div>
     
                </section> 
                <hr />
                
                
                
                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
{/block}