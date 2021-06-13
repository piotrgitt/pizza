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
                        <h2>Kontakt</h2>
                </header>  
        <!-- MAPA Google --> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.6857342749176!2d21.01920621579605!3d52.21275827975725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eccde106e1f83%3A0x7b9e8241aa4b1275!2sPu%C5%82awska+1%2C+00-001+Warszawa!5e0!3m2!1spl!2spl!4v1535123729732" width=100% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        
    
            
        
        
        <!-- concact -->                
        <section id="four" class="wrapper style1 special fade-up">
                <div class="container">

                        <div class="box alt">
                                <div class="row gtr-uniform">
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fas fa-map-marked-alt "></span>
                                                <h3>Znajdź nas</h3>
                                                <p>C.H. Agora Bytom (POZIOM -1)</p>
                                                <p> Pl. Kościuszki 1</p> 
                                                <p>41-902 Bytom</p> 
                                                <p>Zobacz na mapie</p> 
                                        </section>
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fas fas fa-phone-alt"></span>
                                                <h3>Zadzwoń do nas</h3>
                                                <p>tel. (32) 643 23 12</p><br>
                                                <p>e-mail: info@pizza.bytom.pl</p><br>
                                        </section>
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fas fa-clock"></span>
                                                <h3>Godziny otwarcia</h3>
                                                <p>PON - SOB 09:00 - 21:00</p>
                                                <p>NIEDZIELA 10:00 - 19:00</p>
                                        </section>

                                </div>
                        </div>
                        <footer class="major">
                                <ul class="actions special">
                                        <li><a href="{$conf->action_root}reservation" class="button">Zamów pizzę!</a></li>
                                </ul>
                        </footer>
                </div>
        </section>

                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
{/block}