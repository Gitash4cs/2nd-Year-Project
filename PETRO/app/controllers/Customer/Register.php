<?php

class Register extends Controller
{
    public function __construct(){
        $this->register=$this->model('M_Register');
    }
    public function index(){
        $this->view('Customer/register');

    }
        
    public function register(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[

                'fname' => trim( $_POST['fname']),
                'lname' => trim( $_POST['lname']),
              
                'email' => trim( $_POST['email']),
                'phone' => trim( $_POST['phone']),
                'vno' => trim( $_POST['vno']),
                'vtype' => trim( $_POST['vtype']),
                'ftype' => trim( $_POST['ftype']),
                
                'sNo' => trim( $_POST['sNo']),
                'type' => trim( $_POST['type']),
                'ftype2' => trim( $_POST['ftype2']),
                
                'pass' => trim($_POST['password']),
                'cpass' => trim($_POST['cpassword']),
                'points' => trim($_POST['points']),
                'message' =>'',

        
                'err'=>'',

            ];

          $insert= $this->register->register($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Home/Login');

           }
           else{
            if($insert==4){
                $message = 'Confirm password not matched!';
                $data['message']=$message;
                $this->view('Customer/register',$data);

            }
            else if($insert==3){
                $message = 'user with that vehicle no already exists!';
                $data['message']=$message;
                $this->view('Customer/register',$data);
            }
            else{
            $message = 'user already exist';
            $data['message']=$message;
            $this->view('Customer/register',$data);
            }
           }
                
        }
    }}
    