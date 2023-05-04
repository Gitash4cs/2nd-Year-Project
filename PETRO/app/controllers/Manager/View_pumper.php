<?php

class View_pumper extends Controller{

    public $View_pumper;
    public function __construct(){
        $this->View_pumper=$this->model('M_View_pumper');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['distribution_manager_id'],

        ];
        $result=($this->View_pumper->View_pumper($data));
        if($result){
            $this->view('Manager/View_pumper',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('Manager/View_pumper',$data);
        }
    }
}