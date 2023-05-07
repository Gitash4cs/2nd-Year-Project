
<?php

class View_pumper extends Controller
{
    public $pumper;
    public function __construct()
    {
        $this->pumper=$this->model('M_view_pumper');
    }

    public function index()
    {
        
        $result = $this->pumper->pumper_list();

        if($result){
            $this->view('Staff-manager/View_pumper',$result);

        }
        else{
            $this->view('Staff-manager/View_pumper',);
        }
    }

    public function remove_pumper()
    {
        $pump_Email = $_GET['pump_email'];
        $result=$this->pumper->pump_remove($pump_Email);
       

        header('location:http://localhost/PETRO/public/Staff-manager/view_pumper');
    }

}