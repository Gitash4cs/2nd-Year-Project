<?php

class Profile extends Controller{
    public $profile;
    public function __construct(){
        $this->profile=$this->model('M_Profile');
    }
    public function index(){
        $data=[
            'pumper_id'=>$_SESSION['pumper_id'],
            'Email'=>'',

        ];
        $result=$this->profile->pumper_details($data);
        if($result){
            $this->view('Pumper/profile',$result);
        }
    }

    public function logout(){
        $result=$this->profile->logout();
        if($result){
            header('location:http://localhost/PETRO/public/Home/Login');
        }
    }
}