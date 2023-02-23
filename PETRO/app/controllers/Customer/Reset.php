<?php

class Reset extends Controller
{
    public $reset;
    public function __construct(){
        $this->reset=$this->model('M_Reset');
    }
    public function index(){
        $this->view('Customer/reset');
    }
    public function details(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $Email = $_SESSION['Email'];
            $new =trim($_POST['new_password']);
            $confirm = trim($_POST['confirm_password']);
            $data=[
                'new'=>$new,
                'confirm'=>$confirm,
                'Email'=>$Email,
            ];
            $check = $this->reset->check($data);
            if($check){
                $data=[
                    'error'=>"YOUR PASSWORD HAS BEEN CHANGED!",
                ];
                $this->view('Customer/reset',$data);
            }
            else{
                $data=[
                    'error'=>"PASSWORD DIDN'T MATCHED!",
                ];
                $this->view('Customer/reset',$data);
            }
        }
    }
}