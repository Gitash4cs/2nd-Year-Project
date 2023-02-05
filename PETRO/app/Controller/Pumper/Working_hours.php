<?php

class working_hours extends Controller{
    public $hours;
    public function __construct(){
        $this->hours=$this->model('M_Hours');
    }
    public function index(){
        $result = $this->hours->details();
        if($result){
            $this->view("Pumper/hours",$result);
        }
    }
    public function previous(){
        if($_SERVER['REQUEST_METHOD']=='POST'){

            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'date'=>trim($_POST['date']),
                'err'=>'',
            ];
            $result=$this->hours->previous1($data);
            if($result){
                $this->view('Pumper/hours',$result);
            }
            else{
                $this->view('Pumper/hours',$data);
            }
        }
    }
}