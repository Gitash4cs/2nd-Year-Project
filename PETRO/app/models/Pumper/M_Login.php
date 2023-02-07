<?php

class M_Login extends Model{
    protected $table = 'fuel_pumper';
    

    public function login($data)
    {
        $result1=$this->login_pumper($data);

       if($result1){
        date_default_timezone_set('Europe/London');
        $time = date('H:i:s');
        $_SESSION['login_time']=$time;
        return true;
        }
        else{
           return false;
        }
    }



}