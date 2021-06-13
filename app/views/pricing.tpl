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
{/block}