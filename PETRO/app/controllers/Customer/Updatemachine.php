
<?php
class Updatemachine extends Controller{
public $Updatemachine1;

    public function __construct(){
    
        $this->updatemachine=$this->model('M_UpdateMachine');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->updatemachine->updatemachine($data);
        if($result){
            $this->view('Customer/updatemachine',$result);
        }
    }



    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];

            $data=[
                'sNo' => trim($_POST['mno']),
                'type'=>trim($_POST['mtype']),
                'ftype3'=>trim($_POST['ftype']),
                'phone'=>trim($_POST['phone']),
                'err'=>'',

            ];
           
            $result = $this->updatemachine->add($data);
            if($result){
                header('location:http://localhost/PETRO/public/Customer/Profile');

            }
        }


    }




}