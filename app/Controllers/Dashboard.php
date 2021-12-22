<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\DataBelanja;

class Dashboard extends BaseController
{
    protected $product;
    protected $belanja;
    function __construct()
    {
        $this->product = new ProductModel();
        $this->belanja = new DataBelanja();
    }
    public function index()
    {
        $session = session();
        $session->get('id_user');
        $data['produk'] = $this->product->findAll();
        return view('member/dashboard', $data);
    }
    public function store()
    {
        if (!$this->validate([
            'product' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'jumlah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->belanja->insert([
            'id_user' => $this->request->getVar('hidden'),
            'id_produk' => $this->request->getVar('product'),
            'jumlah' => $this->request->getVar('jumlah'),
            'total_harga' => $this->request->getVar('total')
        ]);
        session()->setFlashdata('message', 'Produk Berhasil dipesan');
        return redirect()->to('/history');
    }
}
