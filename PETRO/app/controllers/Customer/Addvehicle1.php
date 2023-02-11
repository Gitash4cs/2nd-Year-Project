
<?php
class Addvehicle1 extends Controller
{
    public function __construct(){
        $this->addvehicle1=$this->model('M_Addvehicle1');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->addvehicle1->addvehicle1($data);
        if($result){
            $this->view('Customer/addvehicle1',$result);
        }
    }

    public function update(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $id= $_SESSION['id'];

            $data=[

                'vno' => trim( $_POST['vno']),
                'vtype' => trim( $_POST['vtype']),
                'ftype' => trim( $_POST['ftype']),
               
               
        
                'err'=>'',

            ];
            echo $vno;

          $insert= $this->addvehicle1->update($data);
        if($insert==1){
              header('location:http://localhost/PETRO/public/Customer/Home');

           }
           else{
           
            $this->view('Customer/Addvehicle1',$data);

           }
                
        }

    }
}