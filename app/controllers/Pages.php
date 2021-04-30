<?php

  class Pages extends Controller {
    public function __construct(){


    }

    public function index(){
  
      $data = [
        'title' => 'hamza landaoui',
        'description' =>'fffffffffffffffffffffffffffffffffffff'
     
      ];

      $this->view('pages/index' ,$data);
    }

    public function about(){
        $data = [
        'title' => 'about us'
      ];
      $this->view('pages/about',$data);
   
    }
    
  }