
<?php

class View_customer extends Controller
{
    public $order;
    public function __construct()
    {
        $this->order=$this->model('M_view_customer');
    }

    public function index()
    {
        
        $result = $this->order->customer_list();

        if($result){
            $this->view('Staff-manager/view_customer',$result);

        }
        else{
            $this->view('Staff-manager/view_customer',);
        }
    }

}