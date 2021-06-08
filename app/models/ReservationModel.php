<?php


class  ReservationModel {

    private $db;

    public function __construct()
    {
          $this->db =new Database();
    }

    public function addReservation($data){
         $this->db->query('INSERT INTO reservation( ID_u,ID_v) VALUES (:ID_u, :ID_v)');

    // bind 
    
      $this->db->bind(':ID_u',$data['ID_U']);
       $this->db->bind(':ID_v',$data['ID_V']);
        // $this->db->bind(':reservation',$data['email']);

        // execute
        if($this->db->execute()){
            $this->db->query('SELECT MAX(ID_Reservation) as id FROM reservation');
            $id = $this->db->single();
            return $id;
        } else {
            return false ;
        }
         
          
}

    public function addPassager($data){
         $this->db->query('INSERT INTO passager( Name,Num_Passport,Telephone,ID_U,ID_R) VALUES (:Name,:Num_Passport,:Telephone,:ID_U,:ID_R)');

    // bind value
    // print_r($data);

      $this->db->bind(':Name',$data['Name']);
       $this->db->bind(':Num_Passport',$data['Num_Passport']);
        $this->db->bind(':Telephone',$data['Telephone']);
        $this->db->bind(':ID_U',$_SESSION['user_id']);
        $this->db->bind(':ID_R',$data['reservation_id']->id);


        // execute
        if($this->db->execute()){
            return true ;
        } else {
            return false ;
        }
     
}

public function updateplace($nmbr,$idv){
     $this->db->query('UPDATE vol SET NBR_place=NBR_place-:nmbr WHERE ID_VOL=:idv');
      $this->db->bind(':nmbr',$nmbr);
       $this->db->bind(':idv',$idv);


         if($this->db->execute()){
            return true ;
        } else {
            return false ;
        }

}

public function getReservation(){
    
   $this->db->query('SELECT * FROM reservation ,vol WHERE vol.ID_VOL= reservation.ID_v LIMIT 1;');
//   $this->db->bind(':id',$id);
   $row = $this->db->resultSet();
   return $row;
           
    }
    public function getpassager($id){
   
   $this->db->query('SELECT * FROM passager WHERE ID_U=:id;');
   $this->db->bind(':id',$id);
   $list = $this->db->resultSet();
   return $list;
           
    }
    function reservation(){
        $this->db->query( 'SELECT * FROM reservation  ');
       $row =$this->db->resultSet();
       return $row; 

    }
}

