<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class PricingCtrl {
    
    public function action_pricing() {   
        $this->generateView();
    }
    
    
    public function generateView()
    {
        App::getSmarty()->assign("role",\core\SessionUtils::load("role", $keep = true));    
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("pricing.tpl");    
    }
}
