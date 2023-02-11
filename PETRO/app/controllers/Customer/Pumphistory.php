<?php

class Pumphistory extends Controller
{
    public function __construct(){
        $this->pumphistory=$this->model('M_Pumphistory');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'error'=>'',
        ];
        $result=($this->pumphistory->pumphistory($data));
        if($result){
            $this->view('Customer/pumphistory',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('Customer/pumphistory',$data);
        }
    }
}