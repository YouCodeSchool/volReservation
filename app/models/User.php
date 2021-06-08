<?php

class User{
    private $db ;


    public function __construct()
    {
        $this->db =new Database ;
    }


public function register($data){
    $this->db->query('INSERT INTO user( name, password, email) VALUES (:name, :password, :email)');

    // bind value
      $this->db->bind(':name',$data['name']);
       $this->db->bind(':password',$data['password']);
        $this->db->bind(':email',$data['email']);

        // execute
        if($this->db->execute()){
            return true ;
        } else {
            return false ;
        }
         
          
}

   // Login User
    public function login($email, $password){
      $this->db->query('SELECT * FROM user WHERE email = :email');
      $this->db->bind(':email', $email);
      $row = $this->db->single();

      
   
      if(password_verify($password, $row->Password)){
          
        return $row;
        

      } else {
        return false;
     
      }
    } 

    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM user WHERE email =:email');
        $this->db->bind(':email',$email);
        $row =$this->db->single();
        
        //chck row

        if ($this->db->rowCount()>0){
            return true ;
        } else {
        return false ;
        }
    }
}