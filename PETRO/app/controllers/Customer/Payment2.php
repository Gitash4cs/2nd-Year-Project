<?php

class Payment2 extends Controller
{
    public function __construct(){
        $this->payment2=$this->model('M_Payment2');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'total'=>$_SESSION['total'],
            'address'=>$_SESSION['address'],
            'phone'=>$_SESSION['phone'],
        

        ];
        $result=$this->payment2->payment2($data);
        if($result){
            $this->view('Customer/payment2',$result);
        }
    }
    }

    