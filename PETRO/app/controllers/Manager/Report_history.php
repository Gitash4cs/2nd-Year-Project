<?php

class Report_history extends Controller{

    public $Report_history;
    public function __construct(){
        $this->Report_history=$this->model('M_Report_history');
    }
    public function index(){
        $data=[
            
        ];
        $result=($this->Report_history->Report_history($data));
        if($result){
            $this->view('Manager/Report_history',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('Manager/Report_history',$data);
        }
    }
}