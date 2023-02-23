<?php

class Cart extends Controller
{
    public function __construct(){
        $this->cart=$this->model('M_Cart');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->cart->cart($data);
        if($result){
            $this->view('Customer/cart',$result);
        }
    }



    }



