<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }
    public function auth()
    {
        $model = new LoginModel();
        if (!$this->validate([
            'email' => [
                'rules' => 'required|min_length[3]|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} minimal 3 karakter',
                    'valid_email' => '{field} tidak valid'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'min_length' => '{field} minimal 8 karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email_user', $email)->first();
        $session = session();
        if ($data) {
            $pass = $data['user_pass'];
            if ($password == $pass) {
                $ses_data = [
                    'id_user' => $data['id_user'],
                    'email_user' => $data['email_user'],
                    'nama_user' => $data['nama_user'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                if ($data['role'] == "admin") {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/dashboard');
                }
            } else {
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
