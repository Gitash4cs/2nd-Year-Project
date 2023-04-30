<?php

class Complain_reply extends Controller{

    public $complain;
    public function __construct(){
        $this->complain=$this->model('M_complain_reply');
    }

    public function index(){
        $com_id = $_GET['com_id'];
        $result=$this->complain->complain($com_id);
        
        $this->view('Staff-manager/Complain_reply',$result);
    }
    public function register(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data=[
                'response'=>trim($_POST['response']),
                'id'=>trim($_POST['com_id']),
                'status'=>trim($_POST['status']),
            ];
        
        $this->complain->register($data);
        header('location:http://localhost/PETRO/public/Staff-manager/Complain');
        
        }
    }
}