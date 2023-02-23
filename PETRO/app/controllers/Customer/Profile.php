<?php

class Profile extends Controller
{
    public function __construct(){
        $this->profile=$this->model('M_Profile');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->profile->profile($data);
        if($result){
            $this->view('Customer/profile',$result);
        }
    }

    }


