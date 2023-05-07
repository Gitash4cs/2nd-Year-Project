
<?php
class Addmachine extends Controller
{
    public function __construct(){
        $this->addmachine=$this->model('M_Addmachine');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->addmachine->addmachine($data);
        if($result){
            $this->view('Customer/addmachine',$result);
        }
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];

            $data=[

                'sNo' => trim( $_POST['sNo']),
                'type' => trim( $_POST['type']),
                'ftype3' => trim( $_POST['ftype3']),
                'phone' => trim( $_POST['phone']),
               
               
        
                'err'=>'',

            ];
            

          $insert= $this->addmachine->add($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Customer/Profile');

           }

           else {
          
            $this->view('Customer/Addmachine',$insert);
        }
      
                
        }

    }
}