{if $role=="user"}
  {$name = 'main_user_login.tpl'}
{else if $role=="root"}
  {$name = 'main_admin_login.tpl'}
{else}
  {$name = 'main.tpl'} 
{/if}
 {extends $name}


{block name=content}
    
    <!-- Banner -->
        <section id="banner">
            
                <div class="content">
                    
                        <header>
                            
                                <h2>Pizza Gabana</h2>
                                <p>Pieniądze szczęścia nie dają, <br />
                                ale można za nie kupić pizze</p>
                        </header>
                        <span class="image"><img src="{$app_url}/../images/logo.png" alt="" /></span>
                </div>

                <a href="#one" class="goto-next scrolly">Next</a>
        </section>

<!-- One -->
        <section id="one" class="spotlight style1 bottom">
                <span class="image fit main"><img src="{$app_url}/../images/front1.jpg" alt="" /></span>
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
                                        <li><a href="{$conf->action_root}reservation" class="button">Złóż zamówienie</a></li>
                                </ul>
                        </footer>       
                </div>
        </section>
{/block}