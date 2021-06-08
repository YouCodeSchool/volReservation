<?php

  class Pages extends Controller {
    public function __construct(){

      if(!isset($_SESSION['logged'])){
        redirect('users/login');
      }
    }

    public function index(){
  
      $data = [
       
     
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