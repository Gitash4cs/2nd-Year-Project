<?php
class Change_Price extends Controller{
    public $Change_Price;
    public function __construct(){
        $this->Change_Price=$this->model('M_Change_Price');
    }

    public function index(){
        
        $data=[
            'id'=>$_SESSION['distribution_manager_id'],

        ];
            $result=($this->Change_Price->price_history($data));
            if($result){
                $this->view('Manager/Change_price',$result);
            }
            else{
                $data['error']="No Records";
                $this->view('Manager/Change_price',$data);
            }
        }
    

    public function change_price(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'price'=>trim($_POST['price']),
                'fuel_type'=>trim($_POST['fuel_type']),
                
                'err'=>'',

            ];
        }
            if($this->Change_Price->change_price($data)){
                header('location:http://localhost/PETRO/public/Manager/Update');
                //$this->view(Manager/octane);
            }
            //echo "edcs";

    }
}