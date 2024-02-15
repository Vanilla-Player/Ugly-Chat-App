<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
        $this->validation = \Config\Services::validation();

        
    }

    public function index(): string
    {
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');


        return view('user/get_friends');
    }
}
