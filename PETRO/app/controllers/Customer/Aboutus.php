<?php

class Aboutus extends Controller{
   
    public function __construct(){
        $this->aboutus=$this->model('M_Aboutus');
    }

    public function index(){
        $this->view('Customer/aboutus');
    }


}