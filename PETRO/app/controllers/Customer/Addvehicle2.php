<?php

class Addvehicle2 extends Controller
{
    public function __construct(){
        $this->addvehicle2=$this->model('M_Addvehicle2');
    }
    public function index(){
        $this->view('Customer/addvehicle2');

    }
}