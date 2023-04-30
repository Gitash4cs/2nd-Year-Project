<?php

class Assign_pumpper extends Controller
{
    public $order;
    public function __construct()
    {
        $this->order=$this->model('M_assign_pumpper');
    }

    public function index()
    {
        
        $result = $this->order->assign_pumpper();

        if($result){
            $this->view('Staff-manager/Assign_pumpper',$result);

        }
        else{
            $this->view('Staff-manager/Assign_pumpper',);
        }
    }
    
    public function assign(){
        //get user data and asign in to variables (escape special character)
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $editdata=[
                'pumperMashine'=>trim($_POST['pumperMashine']),
                'pumperid'=>trim($_POST['pumperid']),
            ];
            
            $result = $this->order->assign($editdata);
            //redirect to the staff manager's page
            header('location:http://localhost/PETRO/public/Staff-manager/Assign_pumpper');
        }

    }

} 