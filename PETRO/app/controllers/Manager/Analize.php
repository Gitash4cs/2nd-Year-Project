<?php

class Analize extends Controller{
    public $Analize;
    public function __construct(){
        $this->Analize=$this->model('M_Analize');
    }

    public function index(){
        $this->view('Manager/Analize');
    }

    public function Analize(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'startDate'=>$_SESSION['startDate'],
                'finishDate'=>$_SESSION['startDate'],
            ];

            $result = $this->Analize->Analize($data);
            if($result){
                header('location:http://localhost/PETRO/public/Manager/Update');

            }
        }


    }
}