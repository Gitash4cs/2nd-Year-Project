<?php

class Assign_pumpper extends Controller
{
    public $order;
    public function __construct()
    {
        $this->order=$this->model('M_assign_pumpper');
    }

    public function index()
    {
        
        $result = $this->order->assign_pumpper();

        if($result){
            $this->view('Staff-manager/Assign_pumpper',$result);

        }
        else{
            $this->view('Staff-manager/Assign_pumpper',);
        }
    }
    

}