<?php

class Cartd extends Controller
{
    public function __construct(){
        $this->cartd=$this->model('M_Cartd');
        
    }
    
    public function index(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];

            $data=[

                'delete' => trim( $_POST['delete']),
             
               
               
        
                'err'=>'',

            ];
           

          $insert= $this->cartd->cartd($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Customer/Home');

           }
           else{
           
            $this->view('Customer/Store2',$data);

           }
                
        }

    }





    


    }



