<?php

namespace App\Controllers;

use App\Models\ItemModel;

class Item extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $item_model = new ItemModel();
        
        $query = $this->request->getGet('query');
        if ($query) {
            $data['items'] = $item_model->like('name', $query)->orLike('description', $query)->findAll();
            $data['query'] = $query;  // Pass the query back to the view
        } else {
            $data['items'] = $item_model->findAll();
            $data['query'] = '';  // Pass an empty query to the view
        }
        
        return view('Item/index', $data);
    }

    public function add(){
        helper('text'); //to secure on sql injection
        $data=array();
        //helper('form');
        if($this->request->getMethod()=='POST'){

            $post['name'] = strip_quotes($_POST['name']);
            $post['description'] = strip_quotes($_POST['description']);
            $post['price'] = strip_quotes($_POST['price']);
            //$post = $this->request->getPost(['name','description','price']);

            $rules = [
                'name' =>['label' => 'item name', 'rules' => 'required'],
                'description' =>['label' => 'description', 'rules' => 'required'],
                'price' =>['label' => 'price', 'rules' => 'required|numeric']
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }
            else {
                $item_model = new \App\Models\ItemModel();
                $item_model->save($post);
                return redirect()->to('Item/index');
            }
        } 
       return view ('Item/add',$data);
    }
    

    public function view($id){
        $item_model = new \App\Models\ItemModel();
        $data['item']=$item_model->find($id);
        return view('Item/view',$data);
    }

    public function edit($id){
        helper('text'); //to secure on sql injection
        if($this->request->getMethod()=='POST'){

            $post['name'] = strip_quotes($_POST['name']);
            $post['description'] = strip_quotes($_POST['description']);
            $post['price'] = strip_quotes($_POST['price']);
            //$post = $this->request->getPost(['name','description','price']);

            $rules = [
                'name' =>['label' => 'item name', 'rules' => 'required'],
                'description' =>['label' => 'description', 'rules' => 'required'],
                'price' =>['label' => 'price', 'rules' => 'required|numeric']
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }
            else {
                $item_model = new \App\Models\ItemModel();
                $item_model->update($id,$post);
                return redirect()->to('Item/index');
            }

        }

        $item_model = new \App\Models\ItemModel();
        $data['item']=$item_model->find($id);
        return view('Item/edit',$data);
    }

    public function delete($id){

        if($this->request->getMethod()=='POST'){
            $item_model = new \App\Models\ItemModel();
            $item_model->delete($id);
            return redirect()->to('item/index');
        }

        $item_model = new \App\Models\ItemModel();
        $data['item']=$item_model->find($id);
        return view('Item/delete',$data);
    }


}
