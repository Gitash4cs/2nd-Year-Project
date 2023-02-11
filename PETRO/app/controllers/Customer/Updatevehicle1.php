
<?php
class Updatevehicle1 extends Controller
{
    public function __construct(){
        $this->updatevehicle1=$this->model('M_Updatevehicle1');
        
    }
    
    public function index(){
        $data=[
            'id'=>$_SESSION['id'],
            'email'=>'',

        ];
        $result=$this->updatevehicle1->updatevehicle1($data);
        if($result){
            $this->view('Customer/updatevehicle1',$result);
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