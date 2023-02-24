
<?php
class Home extends Controller{
    public $Update;
    public function __construct(){
        $this->Home=$this->model('M_Home');
    }

    public function index(){

        $result=($this->Home->update_fuel());
            if($result){
                $this->view('Admin/Home',$result);
            }
            else{
                $this->view('Admin/Home',);
            }  
    } }