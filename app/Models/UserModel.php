<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'tb_user';
    protected $primaryKey = 'id_user';

    protected $returnType = 'object';
    protected $useTimestamps = true;

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_user', 'email_user', 'user_pass', 'no_hp', 'alamat'];

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
