<?php

class Cart extends Controller
{
    public function __construct(){
        $this->cart=$this->model('M_Cart');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->cart->cart($data);
        if($result){
            $this->view('Customer/cart',$result);
        }
    }

    public function remove(){

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $data=[
                'O_ID'=>trim($_POST['Oid']),
                'p_id'=>trim($_POST['p_id']),
                'quantity'=>trim($_POST['quantity']),
            ];
            $this->cart->remove($data);
            header('location:http://localhost/PETRO/public/Customer/Cart');



    }
}



public function update(){

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
        $data=[
            'O_ID'=>trim($_POST['Oid']),
            'p_id'=>trim($_POST['p_id']),
            'quantity'=>trim($_POST['quantity']),
        ];
        $this->cart->update($data);
        header('location:http://localhost/PETRO/public/Customer/Cart');



}
}



    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];
            $data=[
                'user_id'=>trim($_POST['user_id']),
                'pids'=>trim($_POST['pids']),
                'address'=>trim($_POST['address']),
                'phone'=>trim($_POST['phone']),
                'total'=>trim($_POST['total']),
                'pmethod'=>trim($_POST['pmethod']),
              
                
            ];
            $_SESSION['total']=$data['total'];
            $_SESSION['address']=$data['address'];
            $_SESSION['phone']=$data['phone'];


            $insert= $this->cart->add($data);
            if($insert==1){
       
      
              header('location:http://localhost/PETRO/public/Customer/Success');

           }

        
           else{
           
            header('location:http://localhost/PETRO/public/Customer/Payment2');

           }
                
        }

    }


    }



