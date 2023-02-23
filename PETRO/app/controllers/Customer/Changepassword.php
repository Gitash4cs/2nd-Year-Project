<?php

class Changepassword extends Controller
{
    public $change;
    public function __construct(){
        
        $this->change=$this->model('M_Changepassword');
    }
    public function index(){
        
        $this->view('Customer/changepassword');
    }

    public function change(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'current_password'=>trim($_POST['current_password']),
                'new_password'=>trim($_POST['new_password']),
                'confirm_password'=>trim($_POST['confirm_password']),
                'err'=>'',

            ];
            $result=$this->change->change($data);
            $data['err']=$result;
            $this->view('Customer/profile',$data);
        }
    }
}