<?php

class Rating extends Controller
{
    public function __construct(){
        $this->rating=$this->model('M_Rating');
    }
    public function index(){
    
      
            $this->view('Customer/rating');
        }
    }

    