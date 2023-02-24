<?php

class Home extends Controller{
    public $home;
    
    public function index(){
        $this->view('staff-manager/home');
    }

    public function logout(){
        $result=$this->home->logout();
        if($result){
            header('location:http://localhost/PETRO/public/Pumper/Login');
        }
    }
}