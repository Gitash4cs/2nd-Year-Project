<?php

class Home extends Controller
{
    public function __construct(){
        $this->home=$this->model('M_Home');
    }


    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->home->products($data);
        if($result){
            $this->view('Customer/home',$result);
        }
    }}    



  

