
<?php

class View_pumper extends Controller
{
    public $order;
    public function __construct()
    {
        $this->order=$this->model('M_view_pumper');
    }

    public function index()
    {
        
        $result = $this->order->pumper_list();

        if($result){
            $this->view('Staff-manager/View_pumper',$result);

        }
        else{
            $this->view('Staff-manager/View_pumper',);
        }
    }

}