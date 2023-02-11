<?php

class Pendingpetrol extends Controller
{
    public function __construct(){
        $this->pendingpetrol=$this->model('M_Pendingpetrol');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'error'=>'',
        ];
        $result=($this->pendingpetrol->pendingpetrol($data));
        if($result){
            $this->view('Customer/pendingpetrol',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('Customer/pendingpetrol',$data);
        }
    }
}