<?php

class Storehistory extends Controller
{
    public function __construct(){
        $this->storehistory=$this->model('M_Storehistory');
    }
    public function index(){
    
      
            $this->view('Customer/storehistory');
        }
    }

    