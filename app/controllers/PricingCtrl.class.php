<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class PricingCtrl {
    private $services;
    
    
    
    public function action_pricing() {   
        if($this->validate()){
            try {
            $this->services = App::getDB()->select("service", [
                "id_service",
                "service_name",
                "service_price",
                    ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }
    
    
    public function generateView()
    {
        App::getSmarty()->assign('services', $this->services);
        App::getSmarty()->assign("role",\core\SessionUtils::load("role", $keep = true));    
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("pricing.tpl");    
    }

    public function validate() {
        return true;
    }

}
