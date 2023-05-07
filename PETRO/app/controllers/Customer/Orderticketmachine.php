<?php

class Orderticketmachine extends Controller
{
    public function __construct(){
        $this->orderticketmachine=$this->model('M_Orderticketmachine');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
        

        ];
        $result=$this->orderticketmachine->orderticketmachine($data);
        if($result){
            $this->view('Customer/orderticketmachine',$result);
        }
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];

            $data=[
                'Oid' => trim( $_POST['Oid']),

                'id' => $id,
                'email' => trim( $_POST['email']),
                'vno' => trim( $_POST['vno']),
                'vtype' => trim( $_POST['vtype']),
                'ftype' => trim( $_POST['ftype']),
                'amount' => trim( $_POST['amount']),
                'price' => trim( $_POST['price']),
                'cdate' => trim( $_POST['cdate']),
                'ndate' => trim( $_POST['ndate']),
                'status' => trim( $_POST['status']),
               
        
                'err'=>'',

            ];

          $insert= $this->orderticketmachine->add($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Customer/Home');

           }
           else{
           
            $this->view('Customer/Home',$data);

           }
                
        }

    }
           
}


