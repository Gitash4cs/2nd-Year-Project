<?php

class Delete_cus extends Controller
{
    public function __construct(){
        $this->delete =$this->model('M_Delete_cus');
    }
    public function index(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data = [
                'id' =>trim($_POST['delete']),
            ];

        }
       
        $result=$this->delete->records($data); 
        if($result){
            $data=[
                'error'=>"USER HAS BEEN SUCCESSFULLY REMOVED!",
            ];
           $this->view('Admin/output',$data);
        }
        else{
            $data=[
                'error'=>"THIS ID IS NOT EXISTS!!",
            ];
            $this->view('Admin/output',$data);
        }
    }
}