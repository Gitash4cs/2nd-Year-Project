<?php

class Payment extends Controller
{
    public function __construct(){
        $this->payment=$this->model('M_Payment');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
        

        ];
        $result=$this->payment->payment($data);
        if($result){
            $this->view('Customer/payment',$result);
        }
    }
    }

    