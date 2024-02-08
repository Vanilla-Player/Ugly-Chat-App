<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Message extends Controller {

    public function __construct()
    {   
        helper(['form', 'url']);
        $this->messageModel = model('MessageModel');
    }

    public function index(){

    }


    public function getMessages($friend_id){

        $user_id = session()->get('user_id');
        
        $messages = $this -> messageModel -> where("(sender_id = $friend_id AND receiver_id = $user_id) OR (sender_id = $user_id AND receiver_id =$friend_id)")
        ->orderBy('created_at', 'asc')
        ->findAll();

        $data['messages'] = $messages;
        $data['friend_id'] = $friend_id;
        $data['user_id'] = $user_id;
        
        return view('user_messages', $data);
    }

    public function add($friend_id){
        
        $user_id = session()->get('user_id');

        $data = array(
            'sender_id' => $user_id,
            'receiver_id' => $friend_id,
            'content' => $this->request-> getPost('message')
        );

        $this->messageModel->insert($data);

        return redirect()->to('message/getmessages/' . $friend_id);

    }

}