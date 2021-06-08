<?php

class Reservation extends Controller{

    public function __construct()
    { 
     $this->reservModel = $this->model('ReservationModel');
      if(!isset($_SESSION['logged'])){
        redirect('users/login');

      }    
    }

    public function reserver(){
        $this->view('reservation/reserver');
        
        
    }

    public function listreservation(){
        $this->view('reservation/listreservation');
        
    }
    public function add($idd){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // print_r($_POST);
      
        $data = [ 
        //   'Name' => ($_POST['Name']),
        //   'Num_Passport' => ($_POST['passport']),
        //   'Telephone' => ($_POST['telephone']),
        //  'ID_U' => $_SESSION['user-id'],
        //   'ID_V' => $_GET['ID_VOL']
        'ID_U' => $_POST['ID_U'],
        'ID_V' => $_POST['ID_V']
        ];
        // $this->reservModel->addReservation($data);
        if($id = $this->reservModel->addReservation($data)){
              global $count;
              $count =0;
            // redirect('flights/dashboard');
            for ($i=0; $i < $_POST['passengers']; $i++) { 
                
                $passager = [
                    'Name'=>$_POST['Name'][$i],
                    'Num_Passport'=>$_POST['passport'][$i],
                    'Telephone'=>$_POST['telephone'][$i],
                    'reservation_id'=>$id,
                    
                ];

                $this->reservModel->addPassager($passager);
                $count++;
                
            }
        
            }
            
             $listreserv=$this->reservModel->getReservation();
   
              $listpsgr=$this->reservModel->getpassager($idd);
              $this->reservModel->updateplace($count,$_POST['ID_V']);
              
              

                $data = [
                    
                    'reservs' => $listreserv,
                    'passagers' => $listpsgr,
                ] ;
                // print_r($data);
             $this->view('reservation/listreservation' ,$data);
            } else {
                //  $this->view('flights/add');
            }


            
           
}
 public function showreserv(){

     $reservation=$this->reservModel->reservation();

     $data=[
         'hamza' =>$reservation,

     ];

      $this->view('reservation/showR',$data);
     

}

}


