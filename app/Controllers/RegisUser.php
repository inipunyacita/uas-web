<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegisUser extends BaseController
{
    protected $user;
    function __construct()
    {
        $this->user = new UserModel();
    }
    public function index()
    {
        return view('regis-user');
    }
    public function regis()
    {
        if (!$this->validate([
            'namauser' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} minimal 3 karakter',
                ]
            ],
            'emailuser' => [
                'rules' => 'required|min_length[3]|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} minimal 3 karakter',
                    'valid_email' => '{field} tidak valid'
                ]
            ],
            'passuser' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} minimal 8 karakter',
                ]
            ],
            'nohp' => [
                'rules' => 'required|min_length[9]|numeric',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} minimal 9 angka',
                    'numeric' => '{field} hanya boleh berupa angka'
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} minimal 5 huruf'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->user->insert([
            'nama_user' => $this->request->getVar('namauser'),
            'email_user' => $this->request->getVar('emailuser'),
            'user_pass' => $this->request->getVar('passuser'),
            'no_hp' => $this->request->getVar('nohp'),
            'alamat' => $this->request->getVar('alamat'),
            'role' => $this->request->getVar('role')
        ]);
        session()->setFlashdata('message', 'Selamat, registrasi member Berhasil');
        return redirect()->to('/regisuser');
    }
}
