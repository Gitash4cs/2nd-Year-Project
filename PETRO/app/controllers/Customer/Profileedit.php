<?php

class Profileedit extends Controller
{
    public function __construct(){
        $this->profileedit=$this->model('M_Profileedit');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            

        ];
        $result=$this->profileedit->profileedit($data);
        if($result){
            $this->view('Customer/profileedit',$result);
        }
    }

    }


