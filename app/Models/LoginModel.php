<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table      = 'tb_user';
    protected $primaryKey = 'id_user';

    protected $allowedFields = ['nama_user', 'email_user', 'user_pass', 'no_hp', 'alamat', 'role'];
}
