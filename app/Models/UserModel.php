<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $useSoftDeletes = false;

    protected $allowedFields = ['id','username'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;


}