<?php

class Orderv1 extends Controller
{
    public function __construct(){
        $this->orderv1=$this->model('M_Orderv1');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            
            'email'=>'',

        ];
        $result=$this->orderv1->orderv1($data);
        if($result){
            $this->view('Customer/orderv1',$result);
        }
    }


    }



