<?php

use LDAP\Result;

class View_customer_Profile extends Controller
{
    public $Profile;
    public function __construct(){
        $this->Profile=$this->model('M_View_customer_Profile');
    }
    public function index(){

        $cus_ID = $_GET['cus_id'];
        $result=$this->Profile->profile($cus_ID);
        
        if($result){
            $this->view('Staff-manager/view_customer_profile',$result);
        }
        
    }

    
}


