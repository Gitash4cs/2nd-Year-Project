<?php

class Orderticketvehicle extends Controller
{
    public function __construct(){
        $this->orderticketvehicle=$this->model('M_Orderticketvehicle');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
        

        ];
        $result=$this->orderticketvehicle->orderticketvehicle($data);
        if($result){
            $this->view('Customer/orderticketvehicle',$result);
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
                'ndate' => trim( $_POST['ndate']),
                'status' => trim( $_POST['status']),
                'usedpoints' => trim( $_POST['usedpoints']),
                'petropoints' => trim( $_POST['petropoints']),
               
        
                'err'=>'',

            ];
            

          $insert= $this->orderticketvehicle->add($data);
          $this->orderticketvehicle->records($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Customer/Success');

           }
           else{
           
            $this->view('Customer/Home',$data);

           }
                
        }

    }
           
}


