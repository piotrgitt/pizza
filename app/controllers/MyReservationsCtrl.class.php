<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;




class MyReservationsCtrl {
    
    private $id_user;
    private $reservations;
    private $services;
    private $role;
    private $id_reservation;
    private $suma;
    
    private $adres;
    private $nazwa_zamowienia;
    private $cena_zamowienia;
    
    
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
        $this->id_reservation = \core\ParamUtils::getFromCleanURL(1, false);
        
    }
    
    public function action_my_reservations() {   
        $this->getParams();
        $this->getMyReservations();
        $this->generateView();
    }
    
    
    
    public function action_zamow() {   
        $this->getParams();
        $this->adres = \core\ParamUtils::getFromRequest('adres');
        $this->getMyReservations();
        if($this->validate()){
            foreach($this->reservations as $reservation) {
            $this->nazwa_zamowienia =  $this->nazwa_zamowienia . $reservation["service_name"]." + ";
            $this->cena_zamowienia = $this->cena_zamowienia + $reservation["service_price"];
        }
            
        }
        
        if ($this->validate()) {
            try {
                
                App::getDB()->insert("zamowienia", [
                            "nazwa" => $this->nazwa_zamowienia,
                            "cena" => $this->cena_zamowienia,
                            "adres" => $this->adres,
                            "id_user" => $this->id_user
                ]);
                
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        
        //USUŃ KOSZYk
        try {
            $this->reservations = App::getDB()->delete("reservation", [
                "AND" => [
                        "id_user" => $this->id_user
                ]
            ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        
        $this->validate();
        
        
        App::getRouter()->forwardTo('thanks2');
    }
    
    
    
    public function action_usun_konto() {   
            $this->getParams();         
            try {
            App::getDB()->delete("user", [
                "AND" => [
                        "id_user" => $this->id_user
                ]
            ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        
        App::getRouter()->forwardTo('logout');
        $this->action_my_reservations();
    }
    
    public function action_delete_reservation() {   
        $this->id_reservation = \core\ParamUtils::getFromCleanURL(1, false);
            try {
            $this->reservations = App::getDB()->delete("reservation", [
                "AND" => [
                        "id_reservation" => $this->id_reservation
                ]
            ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        
        $this->action_my_reservations();
    }
    
    
    
   
    public function getMyReservations() {  

        if($this->validate()){
            try {
            $this->reservations = App::getDB()->select("reservation", 
                [
                    "[>]service" => "id_service"
                ],[
                    
                    "reservation.id_reservation", 
                    "service.service_price",
                    "reservation.id_service",
                    "reservation.id_user",
                    "service.service_name",
                ], [
                    "reservation.id_user" => $this->id_user
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
        App::getSmarty()->assign("reservations", $this->reservations);
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("my_reservations.tpl");    
    }
}
