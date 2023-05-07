<?php
   

class Home2 extends Controller
{
    public function __construct(){
        $this->home2=$this->model('M_Home2');
    }


    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->home2->products($data);
        if($result){
            $this->view('Customer/home2',$result);
        }


    
    }



}    



  

