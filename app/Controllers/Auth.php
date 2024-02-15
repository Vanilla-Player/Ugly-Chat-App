<?php namespace App\Controllers;

class Auth extends \IonAuth\Controllers\Auth {

    public function __construct()
    {
        parent::__construct();
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
    }

    public function index(){

        if(!$this->ionAuth->loggedIn()){
            return redirect()->to('auth/login');

        }else{

            return redirect()->to('user/get_friends');

        }
    }

}