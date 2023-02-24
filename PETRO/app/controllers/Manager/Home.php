<?php

class Home extends Controller{
    public $Home;
    public function __construct(){
        $this->Home=$this->model('M_Home');
    }

    public function index(){
        $this->view('Manager/Home');
    }

}