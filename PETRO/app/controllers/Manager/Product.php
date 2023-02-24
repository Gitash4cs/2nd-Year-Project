<?php

class Product extends Controller{

    public $Product;
    public function __construct(){
        $this->Product=$this->model('M_Product');
    }
    public function index(){
        $data=[
            
        ];
        $result=($this->Product->Product($data));
        if($result){
            $this->view('Manager/Product',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('Manager/Product',$data);
        }
    }
}