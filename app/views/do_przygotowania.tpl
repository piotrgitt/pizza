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

         

            <h3>DO PRZYGOTOWANIA</h3>

            <section>
                <form method="post" action="{$conf->action_root}przekazano_do_dostawy" >
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Cena(PLN)</th>
                                                    <th>Adres</th>
                                                    <th>Imię i nazwisko</th>
                                                    <th>Nr telefonu</th>
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
                                                            <td><a href="{$conf->action_root}gotowe_zamowienie/{$zamowienie["id_zamowienia"]}" class="button" value="{$zamowienie["id_zamowienia"]}" id="id_zamowienia" name="id_zamowienia" > GOTOWE </a></td>

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