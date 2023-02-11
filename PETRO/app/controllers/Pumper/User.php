<?php

class User extends Controller
{
    public $order;
    public function __construct()
    {
        $this->order=$this->model('M_User');
    }

    public function index()
    {
        $result = $this->order->load();
        $this->view('Pumper/user',$result);
    }
    public function order_verify(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data=[
                'order_no'=>trim($_POST['order_id']),
                'date'=>'',
                'time'=>'',
                'err'=>'',
            ];
            if(($this->order->order_verify($data))==true){
                header('location:http://localhost/PETRO/public/Pumper/Order');
            }
            else{
                $helper=new Helpers;
                $data['date']=$helper->date();
                $data['time']=$helper->time();
                $data['err']="Order Id is Invalid!";
                $this->view('Pumper/user',$data);
            }
        }
    }
}