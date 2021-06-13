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

         

            <h3>Wszystkie zamówienia</h3>

            <section>
                <form method="post" action="{$conf->action_root}delete_reservation" >
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
                                           {foreach $zamowienia as $zamowienie}
                                                {strip}
                                                        <tr>
                                                            
                                                            <td>{$zamowienie["nazwa"]}</td>
                                                            <td>{$zamowienie["cena"]}</td>
                                                            <td>{$zamowienie["adres"]}</td>
                                                            <td>{$zamowienie["name"]}</td>
                                                            <td>{$zamowienie["phone_number"]}</td>
                                                            <td><a href="{$conf->action_root}usun_zamowienie/{$zamowienie["id_zamowienia"]}" class="button" value="{$zamowienie["id_zamowienia"]}" id="id_zamowienia" name="id_zamowienia" > Anuluj zamówienie/Zrealizuj zamówienie </a></td>
                                                        </tr>
                                            {/strip}
                                            {/foreach}   
                                    </tbody>

                            </table>      
                    </div>

                </form>
        </section>                                           
        </div>
</div>
{/block}