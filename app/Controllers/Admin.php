<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login(){
        if($this->request->getMethod()=='POST'){
            $post = $this->request->getPost(['email','password']);
            $admin_model = new \App\Models\AdminModel();
            $admin=$admin_model->where('email',$post['email'])
            ->where('password',sha1($post['password']))
            ->first();

            $session=session();
            if(!$admin){
                $session->setflashdata('invalid','Invalid Username and Password');
            }
            else
            {
                $this->setAdminSession($admin);
                return redirect()->to('Item/index');
            }
        }


        echo view ('admin/login');
    }

    public function logout(){
        session()-> destroy();
        return redirect()->to('admin/login');
    }

    public function setAdminSession($admin){
        $data=[
            'id' => $admin->id,
            'name' => $admin->name,
            'email' => $admin->email,
            'isAdminLoggedIn' => true,
        ];

        session()->set($data);
    }

}