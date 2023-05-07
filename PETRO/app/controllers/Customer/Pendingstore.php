<?php

class Pendingstore extends Controller
{
    public function __construct(){
        $this->pendingstore=$this->model('M_Pendingstore');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'error'=>'',
        ];
        $result=($this->pendingstore->pendingstore($data));
        if($result){
            $this->view('Customer/pendingstore',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('Customer/pendingstore',$data);
        }
    }
}