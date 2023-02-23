<?php

class Addvehicle3 extends Controller
{
    public function __construct(){
        $this->addvehicle3=$this->model('M_Addvehicle3');
    }
    public function index(){
        $this->view('Customer/addvehicle3');

    }
}