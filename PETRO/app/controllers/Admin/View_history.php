<?php

class View_history extends Controller{
    public $View_history;
    public function __construct(){
        $this->View_history=$this->model('M_View_history');
    }
    public function index(){
        $data=[
            
        ];
        $result=($this->View_history->View_history($data));
        if($result){
            $this->view('Manager/View_history',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('Manager/View_history',$data);
        }
    }
}