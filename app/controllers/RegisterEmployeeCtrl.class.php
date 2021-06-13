<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class RegisterEmployeeCtrl {
    private $name;
    private $email;
    private $tel;
    private $password;
    
    //ZAREJESTROWANIE UŻYTKOWNIKA, KLIENTA
    public function action_registerEmployee() {   
        $this->getParams();
        if ($this->validate()) {
            try {
                
                App::getDB()->insert("user", [
                            "name" => $this->name,
                            "phone_number" => $this->tel,
                            "e_mail" => $this->email,
                            "login" => $this->email,
                            "password" => $this->password,
                            "role" => "root"
                ]);
                
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('thanks3');
            
        }
        
        $this->generateView();
    }
    
    public function getParams(){
        $this->name = \core\ParamUtils::getFromRequest('name');
        $this->email = \core\ParamUtils::getFromRequest('email');
        $this->tel = \core\ParamUtils::getFromRequest('tel');
        $this->password = \core\ParamUtils::getFromRequest('password');   
    }
    
    
    public function generateView()
    {
//        App::getSmarty()->assign("role",\core\SessionUtils::load("role", $keep = true));    
//        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
//        Utils::addInfoMessage("Or even easier message :-)");
        
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("register_employee.tpl");    
    }

    public function validate(){    
        if(isset($this->name) && isset( $this->email)&& isset( $this->tel)&& isset( $this->password)) return true;
        else return false;
        
	
    }

}
