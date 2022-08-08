<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\HTTP\Request;

class Login extends BaseController
{
    public function index()
    {
        $data = [];
        helper('form');
        
        
        $LoginModel = new  \App\Models\LoginModel();
        $login =  $this->request->getPost('login');
        if($login) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            if($email == '' or $password == ''){
                $err = "Silahkan masukkan email dan password";
            }
            if(empty($err)){
                $dataLogin = $LoginModel->where("email", $email)->first();
                if($dataLogin){
                    // $err = "Email tidak ada";
                    if($dataLogin['password'] != md5($password)){
                        $err = "Password tidak sesuai";
                    }else{
                        $dataSesi = [
                            'id_petugas' => $dataLogin['id_petugas'],
                            'nama_petugas' => $dataLogin['nama_petugas'],
                            'email' => $dataLogin['email'],
                            'password' => $dataLogin['password'],
                            'token' => $dataLogin['token'],
                        ];
                        session()->set($dataSesi);
                        return redirect()->to('dashboard');
                    }
                }else{
                    $err = "Email tidak ada";
                }
            }
                
            if($err){
                session()->setFlashdata('email', $email);
                session()->setFlashdata('error', $err);
                return redirect()->to("/");                
            }
            echo view('auth/login', $data);
        }
        echo view('auth/header', $data);
        echo view('auth/login', $data);
        echo view('auth/footer', $data);
    }

    public function register()
    {
        $data['title'] = "Register Admin";
        helper(['form', 'text']);

        //set rules validation form
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'nama_petugas' => 'required|min_length[5]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[petugas.email]',
                'password' => 'required|min_length[6]|max_length[255]',
                'token' => 'required|max_length[16]',
            ];

            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new LoginModel();

                $newData = [
                    'nama_petugas' => $this->request->getVar('nama_petugas'),
                    'email' => $this->request->getVar('email'),
                    'password' =>md5($this->request->getVar('password')),
                    'token'=>$this->request->getVar('token')
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Registrasi Berhasil, Silahkan Login');
                return redirect()->to('/');
            }
        }
        
        echo view('auth/header', $data);
        echo view('auth/register', $data);
        echo view('auth/footer', $data);

    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/');
    }

    // public function forgot_password()
    // {
    //     $data['title'] = "Lupa Password";
    //     $LoginModel = new \App\Models\LoginModel();
    //     $view = \Config\Services::renderer();

    //     if($this->request->getMethod() == 'post'){
    //         $emailinput = $this->request->getPost('email');
    //         $cekemail = $LoginModel->where('email', $emailinput)->first();
    //         if($cekemail){
    //             $data['token'] = $cekemail['token'];
    //             $sub = "Lupa lupa lupa";
    //             $msg = 'Token anda : '.$cekemail['token']
    //             .' Link : localhost:8080/login/reset_password/';
                
    //             $email = service('email');
    //             $email->setTo($emailinput);
    //             $email->setFrom('yuda.elvonda@gmail.com','Yuda Elvonda');

    //             $email->setSubject($sub);
    //             // $email->setMessage('Token : '.$cekemail['token']);
    //             $email->setMessage($msg);

    //             if($email->send()){
    //                 // echo 'Email terkirim';
    //                 session()->setFlashdata('success', "Email Terkirim!");
    //             } else {
    //                 // $data['validation'] = $this->validator;
    //                 session()->setFlashdata('error', "Email Tidak Terkirim");
    //             }
    //         }else{
    //             session()->setFlashdata('error', "Email Tidak Ada");
    //         }
    //     }
    //     echo view('auth/header', $data);
    //     echo view('auth/forgot_password', $data);
    //     echo view('auth/footer', $data);
    // }
    // public function reset_password()
    // {
    //     # code...
    //     $data = [];
    //     helper('form');
    //     helper('text');

    //     //set rules validation form
    //     $LoginModel = new \App\Models\LoginModel();
        
    //     if ($this->request->getMethod() == 'post') {
    //         $inputToken = $this->request->getVar('token');
    //         $cekToken = $LoginModel->where('token', $inputToken)->first();
    //         if($cekToken){
    //             if($cekToken){
    //             }else{
    //                 session()->setFlashdata('error', 'Token tidak ada');
    //             }
    //             $rules = [
    //                 'password' => 'required|min_length[6]|max_length[255]',
    //             ];
    
    //             if (! $this->validate($rules)) {
    //                 $data['validation'] = $this->validator;
    //             } else {
    //                 $model = new LoginModel();
    //                 $id = $cekToken['id_petugas'];
    
    //                 $upData = [
    //                     'password' =>md5($this->request->getVar('password'))
    //                 ];
    //                 $model->update($id, $upData);
    //                 $session = session();
    //                 $session->setFlashdata('success', 'Reset Berhasil, Silahkan Login');
    //                 return redirect()->to('/');
    //             }
    //         }else{
    //             session()->setFlashdata('error', 'Token tidak ada');
    //         }
    //     }
        
    //     echo view('auth/header', $data);
    //     echo view('auth/reset_password', $data);
    //     echo view('auth/footer', $data);
    // }

}
