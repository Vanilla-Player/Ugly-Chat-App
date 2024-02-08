<?php

namespace AApp\Model;

use CodeIgniter\Model;

class MessageModel extends Model{

    protected $table      = 'messages';
    protected $primaryKey = 'message_id';

    protected $allowedFields = ['sender_id', 'receiver_id', 'content', 'created_at'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';


}


