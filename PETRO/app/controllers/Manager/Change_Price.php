<?php
class Change_Price extends Controller{
    public $Change_Price;
    public function __construct(){
        $this->Change_Price=$this->model('M_Change_Price');
    }

    public function index(){
        $this->view('Manager/Change_Price');
    }

    public function change_price(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'octane_92'=>trim($_POST['octane_92']),
                'octane_95'=>trim($_POST['octane_95']),
                'auto_diesel'=>trim($_POST['auto_diesel']),
                'super_diesel'=>trim($_POST['super_diesel']),
                
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