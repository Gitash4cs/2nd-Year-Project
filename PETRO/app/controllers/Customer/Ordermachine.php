<?php

class Ordermachine extends Controller
{
    public function __construct(){
        $this->ordermachine=$this->model('M_Ordermachine');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->ordermachine->ordermachine($data);
        if($result){
            $this->view('Customer/ordermachine',$result);
        }
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];

            $data=[

                'id' => $id,
                'sno' => trim( $_POST['sno']),
                'vtype' => trim( $_POST['vtype']),
                'ftype' => trim( $_POST['ftype']),
                'amount' => trim( $_POST['amount']),
                'balance' => trim( $_POST['balance']),
                'pmethod' => trim( $_POST['pmethod']),
               
        
                'err'=>'',

            ];

          $insert= $this->ordervehicle1->add($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Customer/Home');

           }
           else{
           
            $this->view('Customer/Ordermachine',$data);

           }
                
        }

    }
}


