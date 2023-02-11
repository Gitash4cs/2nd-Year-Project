<?php

class Mv extends Controller
{
    public function __construct(){
        $this->mv=$this->model('M_Mv');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            
            

        ];
        $result=$this->mv->mv($data);
        if($result){
            $this->view('Customer/mv',$result);
        }
    }

    }


