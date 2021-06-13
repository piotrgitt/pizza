<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;




class DoPrzygotowaniaCtrl {
    
    private $id_user;
    private $zamowienia;
    private $id_zamowienia;
    private $services;
    private $role;
    private $id_reservation;
    
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new \app\Forms\ReservationForm();
    }
    
    public function validate(){    
	return !App::getMessages()->isError();
    }
    
    public function getParams(){
        $this->id_user = \core\SessionUtils::load("id_user", $keep = true);
        $this->role = \core\SessionUtils::load("role", $keep = true);
        
    }
    
    public function action_do_przygotowania() {   
        $this->getParams();
        $this->getMyReservations();
        $this->generateView();
    }
    
    public function action_gotowe_zamowienie() {   
       $this->id_zamowienia = \core\ParamUtils::getFromCleanURL(1, false);
            try {
            App::getDB()->update("zamowienia", [

                    "przygotowane_do_dostawy" => 1

            ], [
                    "id_zamowienia" => $this->id_zamowienia
            ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas modyfikowania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        $this->action_do_przygotowania();
    }
    
    
   
    public function getMyReservations() {  

        if($this->validate()){
            try {
            $this->zamowienia = App::getDB()->select("zamowienia", 
                [
                    "[>]user" => "id_user"
                ],[
                    
                    "zamowienia.id_zamowienia", 
                    "zamowienia.nazwa",
                    "zamowienia.cena",
                    "zamowienia.adres",
                    "user.name",
                    "user.phone_number"
                ], [
                    "zamowienia.przygotowane_do_dostawy" => 0
        ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
    }
    

    
    public function generateView()
    {
        App::getSmarty()->assign("role", $this->role);
        App::getSmarty()->assign("zamowienia", $this->zamowienia);
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("do_przygotowania.tpl");    
    }
}
