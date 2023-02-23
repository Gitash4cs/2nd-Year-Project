<?php

class Shop extends Controller
{
    public function __construct(){
        $this->shop=$this->model('M_Shop');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'err'=>'',
            

        ];
        $result=$this->shop->shop($data);
        if($result){
            $this->view('Customer/shop',$result);
        }
    }
    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'p_id'=>trim($_POST['p_id']),
                'product_image'=>trim($_POST['product_image']),
                'product_name'=>trim($_POST['product_name']),
                'product_price'=>trim($_POST['product_price']),
                'quantity'=>trim($_POST['product_quantity']),
                'cdate'=>trim($_POST['cdate']),
                'ndate'=>trim($_POST['ndate']),
            ];
            $result1=$this->shop->cart($data);
            if($result1){
                header('location:http://localhost/PETRO/public/Customer/Shop');
              
            }

    }

    }
}


