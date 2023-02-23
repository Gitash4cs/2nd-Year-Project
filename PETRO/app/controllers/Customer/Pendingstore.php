<?php

class Pendingstore extends Controller
{
    public function __construct(){
        $this->pendingstore=$this->model('M_Pendingstore');
    }
    public function index(){
    
      
            $this->view('Customer/pendingstore');
        }
    }

    