<?php

namespace App\Controllers;


use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends BaseController{

    public function __construct()
    {

        $this->userModel = model('UserModel');
    }

    public function index(){

            $users = $this->userModel->findAll();

            $data['users'] = $users;

            
            return view('users',$data);

    }

    public function get_friends($user_id){

        // Creo la session
        session()->set('user_id', $user_id);

        $friends = $this->userModel->where('id !=',$user_id) -> findall();
        $data['friends'] = $friends;
        return view('friends',$data);
    }




}