<?php
    class Add_report extends Controller{
    public $Add_report;
        public function __construct(){
            $this->Add_report=$this->model('M_Add_report');
        }

        public function index(){
            $this->view('Manager/Add_report');
        }

        
    public function Add_report(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'date' => trim($_POST['date']),
                'reduced92'=>trim($_POST['reduced92']),
                'reduced95'=>trim($_POST['reduced95']),
                'reducedsdl'=>trim($_POST['reducedsdl']),
                'reducedadl'=>trim($_POST['reducedadl']),
                'err'=>'',

            ];
            if($this->Add_report->Add_report($data)){
                //$this->view(Manager/octane);
                header('location:http://localhost/PETRO/public/Manager/Report_history');
          }
        }

            //echo "edcs";

    }
    }
?>