<?php

class Ordervehicle2 extends Controller
{
    public function __construct(){
        $this->ordervehicle2=$this->model('M_Ordervehicle2');
       
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->ordervehicle2->ordervehicle2($data);
        if($result){
            $this->view('Customer/ordervehicle2',$result);
        }
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];

            $data=[

                'id' => $id,
                'vno' => trim( $_POST['vno']),
                'vtype' => trim( $_POST['vtype']),
                'ftype' => trim( $_POST['ftype']),
                'amount' => trim( $_POST['amount']),
                'pmethod' => trim( $_POST['pmethod']),
               
        
                'err'=>'',

            ];

          $insert= $this->ordervehicle2->add($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Customer/Home');

           }
           else{
           
            $this->view('Customer/Ordervehicle1',$data);

           }
                
        }

    }
}


