<?php

namespace App\Controllers;

use App\Models\DataBelanja;

class History extends BaseController
{
    protected $belanja;
    function __construct()
    {
        $this->belanja = new DataBelanja();
    }
    public function index()
    {
        $session = session();
        $data['belanja'] = $this->belanja->get_data();
        $data['belanja_user'] = $this->belanja->get_belanja();
        return view('member/history', $data);
    }
    function delete($id)
    {
        $databelanja = $this->belanja->find($id);
        if (empty($databelanja)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data buku tidak ditemukan !');
        }
        $this->belanja->delete($id);
        session()->setFlashdata('message', 'Delete Data Belanja Berhasil');
        return redirect()->to('/history');
    }
}
