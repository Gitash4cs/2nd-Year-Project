<?php

class Ordervehicle1 extends Controller
{
    public function __construct(){
        $this->ordervehicle1=$this->model('M_Ordervehicle1');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->ordervehicle1->ordervehicle1($data);
        if($result){
            $this->view('Customer/ordervehicle1',$result);
        }
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];

            $data=[

                'id' => $id,
                'email' => trim( $_POST['email']),
                'vno' => trim( $_POST['vno']),
                'vtype' => trim( $_POST['vtype']),
                'ftype' => trim( $_POST['ftype']),
                'amount' => trim( $_POST['amount']),
                'balance' => trim( $_POST['balance']),
                'pmethod' => trim( $_POST['pmethod']),
               
        
                'err'=>'',

            ];

          $insert= $this->ordervehicle1->add($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Customer/Orderticketvehicle');

           }
           else{
           
            $this->view('Customer/Ordervehicle1',$data);

           }
                
        }

    }
}

