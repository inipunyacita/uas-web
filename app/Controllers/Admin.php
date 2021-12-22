<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    protected $user;
    function __construct()
    {
        $this->user = new UserModel();
    }
    public function index()
    {
        $data['user'] = $this->user->findAll();
        return view('admin/admin', $data);
    }
    public function store()
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
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Tambah Data Member Berhasil');
        return redirect()->to('/admin');
    }
    public function edit($id)
    {
        $datauser = $this->user->find($id);
        if (empty($datauser)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data User Tidak ditemukan !');
        }
        $data['user'] = $datauser;
        return view('admin/editmember', $data);
    }
    public function update($id)
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

        $this->user->update($id, [
            'nama_user' => $this->request->getVar('namauser'),
            'email_user' => $this->request->getVar('emailuser'),
            'user_pass' => $this->request->getVar('passuser'),
            'no_hp' => $this->request->getVar('nohp'),
            'alamat' => $this->request->getVar('alamat'),
            'role' => $this->request->getVar('role')
        ]);
        session()->setFlashdata('message', 'Ubah Data Member Berhasil');
        return redirect()->to('/admin');
    }
    function delete($id)
    {
        $datauser = $this->user->find($id);
        if (empty($datauser)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data buku tidak ditemukan !');
        }
        $this->user->delete($id);
        session()->setFlashdata('message', 'Delete Data Buku Berhasil');
        return redirect()->to('/admin');
    }
}
