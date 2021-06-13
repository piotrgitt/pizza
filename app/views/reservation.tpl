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
                    <h2>Rezerwacja</h2>
            </header>  

            <h3>Wybierz usługę</h3>
            <section>
                <form method="post" action="{$conf->action_root}process" >
                    <!-- Table -->
                    <fieldset>
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Cena</th>
                                                    <th>     </th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                           {foreach $services as $service}
                                                {strip}
                                                        <tr>
                                                            <td>{$service["service_name"]}</td>
                                                            <td>{$service["service_price"]}</td>
                                                            
                                                            <td> 
                                                                <div class="pretty p-default p-round p-thick">
                                                                    <input type="radio" name="service" id="service" value="{$service["id_service"]}" />
               
                                                                    

                                                                    <div class="state p-danger">
                                                                        <label> </label>
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                {/strip}
                                                {/foreach}    
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
{/block}