<?php

class Addmachine extends Controller
{
    public function __construct(){
        $this->addmachine=$this->model('M_Addmachine');
    }
    public function index(){
        $this->view('Customer/addmachine');

    }
}