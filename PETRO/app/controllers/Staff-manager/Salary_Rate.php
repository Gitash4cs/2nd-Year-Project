
<?php

class Salary_Rate extends Controller
{
    public $order;
    public function __construct()
    {
        $this->order=$this->model('M_salary_rate');
    }

    public function index()
    {
        $result = $this->order->currentRate();
        $this->view('Staff-manager/Salary_Rate',$result);
    }

    public function editRates(){
        //get user data and asign in to variables (escape special character)
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $record=[
                'Basic'=>trim($_POST['Basic']),
                'HRA'=>trim($_POST['HRA']),
                'Daily_allowances'=>trim($_POST['Daily_allowances']),
                'Provident_fund'=>trim($_POST['Provident_fund']),
                'OT'=>trim($_POST['OT']),
                'error'=>'',
            ];
            
            $result = $this->order->submit_record($record);
            header('location:http://localhost/PETRO/Public/Staff-manager/Salary_Rate');
            
        }

    }

}