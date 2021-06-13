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
                        <h2>Galeria</h2>
                </header>
                <!-- Image -->
                    <section>
                            <h3>Galeria</h3>
                            <div class="box alt">
                                    <div class="row gtr-50 gtr-uniform">
                                            <div class="col-12"><span class="image fit"><img src="{$app_url}/../images/gal5.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{$app_url}/../images/gal1.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{$app_url}/../images/gal2.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{$app_url}/../images/gal3.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{$app_url}/../images/gal4.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{$app_url}/../images/gal7.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{$app_url}/../images/gal6.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{$app_url}/../images/gal8.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="{$app_url}/../images/gal9.jpg" alt="" /></span></div>
                  
          
                                    </div>
                            </div>
                    </section>
                                                
                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
{/block}