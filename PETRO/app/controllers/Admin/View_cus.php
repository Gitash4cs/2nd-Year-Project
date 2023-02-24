<?php

class View_cus extends Controller
{
    public $view;
    public function __construct(){
        $this->view=$this->model('M_View_cus');
    }
    public function index(){
        $result=$this->view->records();
        if($result){
            $this->view('Admin/view_cus',$result);
        }
        else
        {
            $data=[
                'error'=>"No Records!!",
            ];
            $this->view('Admin/view_cus',$data);
        }
    }
}