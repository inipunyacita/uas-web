<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'tb_produk';
    protected $primaryKey = 'id_produk';
    protected $returnType = 'object';
    protected $allowedFields = ['nama_produk', 'harga'];
}
