<?php

class Working extends Controller
{
    public $working;
    public function __construct(){
        $this->working=$this->model('M_Working');
    }
    public function index(){
        $data=[
            'pumper_id'=>$_SESSION['pumper_id'],
            'error'=>'',
        ];
        $result=($this->working->details_working($data));
        if($result){
            $this->view('Pumper/working',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('Pumper/working',$data);
        }
    }
}