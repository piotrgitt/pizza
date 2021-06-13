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

         

            <h3>Moje wizyty</h3>

            <section>
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Cena</th>
                                                    <th>Usuń z koszyka</th>
                                            </tr>
                                    </thead>
                                    <tbody>{$suma = NULL}
                                           {foreach $reservations as $reservation}
                                                {strip}
                                                        <tr>
                                                            <td>{$reservation["service_name"]}</td>
                                                            <td>{$reservation["service_price"]}</td>
                                                            {$suma = + $suma + $reservation["service_price"]}
                                                            <td><a href="{$conf->action_root}delete_reservation/{$reservation["id_reservation"]}" class="button" value="{$reservation["id_reservation"]}" id="id_reservation" name="id_reservation" > Usuń przedmiot </a></td>
                                                        </tr>
                                                {/strip}
                                                {/foreach} 
                                                <tr>
                                                            <td>SUMA:</td>
                                                            <td>{$suma}</td>
                                                            <td>PLN <td>
                                                </tr>
                                    </tbody>
                            </table> 
                                <div style="max-width: 35%;margin-left: 5%">
                                    <ul class="actions stacked" >
                                        <form method="post" action="{$conf->action_root}zamow" >
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
{/block}