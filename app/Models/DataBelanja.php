<?php

namespace App\Models;

use CodeIgniter\Model;

class DataBelanja extends Model
{
    protected $table      = 'tb_belanja';
    protected $primaryKey = 'id_belanja';

    protected $returnType = 'array';
    protected $useTimestamps = true;

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_user', 'id_produk', 'jumlah', 'total_harga'];

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function get_data()
    {
        return $this->db->table('tb_belanja')->join('tb_produk', 'tb_produk.id_produk=tb_belanja.id_produk')->get()->getResultArray();
    }

    public function get_belanja()
    {
        return $this->db->table('tb_belanja')->join('tb_produk', 'tb_produk.id_produk=tb_belanja.id_produk')->where('tb_belanja.id_user', session('id_user'))->get()->getResultArray();
    }
}
