<?php

class Storehistory extends Controller
{
    public function __construct(){
        $this->storehistory=$this->model('M_Storehistory');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'error'=>'',
        ];
        $result=($this->storehistory->storehistory($data));
        if($result){
            $this->view('Customer/storehistory',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('Customer/storehistory',$data);
        }
    }
}