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
                                           {foreach $zamowienia as $zamowienie}
                                                {strip}
                                                        <tr>
                                                            
                                                            <td>{$zamowienie["nazwa"]}</td>
                                                            <td>{$zamowienie["cena"]}</td>
                                                            <td>{$zamowienie["adres"]}</td>
                                                            <td>{$zamowienie["name"]}</td>
                                                            <td>{$zamowienie["phone_number"]}</td>
                                                        </tr>
                                                {/strip}
                                                {/foreach} 

                                    </tbody>
                            </table> 

                    </div>
        </section>                                           
        </div>
</div>
{/block}