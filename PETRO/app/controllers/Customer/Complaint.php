<?php

class Complaint extends Controller
{
    public function __construct(){
        $this->complaint=$this->model('M_Complaint');
    }
  
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->complaint->complaint($data);
        if($result){
            $this->view('Customer/complaint',$result);
        }
    }



    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];

            $data=[

                'id' => $id,
                'email' => trim( $_POST['email']),
                'Oid' => trim( $_POST['Oid']),
                'complaint' => trim( $_POST['complaint']),
              
               
        
                'err'=>'',

            ];

          $insert= $this->complaint->add($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Customer/Home');

           }
           else{
           
            $this->view('Customer/Complaint',$data);

           }
                
        }

    }
    
}