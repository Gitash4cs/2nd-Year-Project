<?php

class Update extends Controller{
    public function __construct(){
        $this->Update=$this->model('M_Update');
    }

    public function index(){

        $result=($this->Update->update_fuel());
            if($result){
                $this->view('Manager/Update',$result);
            }
            else{
                $this->view('Manager/Update',$data1);
            }  
    } 
    
    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'fuel_type' => trim($_POST['fuel_type']),
                'arrive_amount'=>trim($_POST['arrive_amount']),
                'eligible_amount'=>trim($_POST['eligible_amount']),
                'err'=>'',

            ];
            $result = $this->Update->add($data);
            if($result){
                header('location:http://localhost/PETRO/public/Manager/Update');

            }
        }


    }
}