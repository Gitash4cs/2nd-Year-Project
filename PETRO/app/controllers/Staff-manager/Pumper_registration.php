
<?php

class Pumper_registration extends Controller
{
    public $order;
    public function __construct()
    {
        $this->order=$this->model('M_pumper_registration');
    }

    public function index()
    {
        
        $this->view('Staff-manager/Pumper_registration');
    }

    public function pumperRegistration(){
        //get user data and asign in to variables (escape special character)
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $record=[
                'id'=>trim($_POST['id']),
                'first_name'=>trim($_POST['firstName']),
                'last_name'=>trim($_POST['lastName']),
                'phone_no'=>trim($_POST['phoneNumber']),
                'nic'=>trim($_POST['nic']),
                'email'=>trim($_POST['email']),
                'password'=>trim($_POST['password']),
                'confirmPassword'=>trim($_POST['cpassword']),
                'error'=>'',
            ];
            
            $userExist = $this->order->user_exist($record['email']);
            if($userExist){
                $editdata['error']="user already exist!";
                $this->view('Staff-manager/Pumper_registration',$record);
            }
            else{
                $result = $this->order->submit_record($record);
                if($result){
                    header('location:http://localhost/PETRO/Public/Staff-manager/View_pumper');
        
                }
                else{
                    $editdata['error']="Password not matched";
                    $this->view('Staff-manager/Pumper_registration',$record);
                }
            }

            
        }

    }

}