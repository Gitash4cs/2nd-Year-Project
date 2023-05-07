<?php

class Pendingpetrol extends Controller
{
    public function __construct(){
        $this->pendingpetrol=$this->model('M_Pendingpetrol');
    }
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'error'=>'',
        ];
        $result=($this->pendingpetrol->pendingpetrol($data));
        if($result){
            $this->view('Customer/pendingpetrol',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('Customer/pendingpetrol',$data);
        }
    }


    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];

            $data=[

                'delete' => trim( $_POST['delete']),
             
               
               
        
                'err'=>'',

            ];
           

          $insert= $this->pendingpetrol->add($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Customer/Home');

           }
           else{
           
            $this->view('Customer/Home',$data);

           }
                
        }

    }
}
