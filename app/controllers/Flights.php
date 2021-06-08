<?php 
class Flights extends Controller{
    public $huh=[];
public function __construct()
{
    // if(!isLoggedIn()){
    //     redirect('users/login'); 
    // }
     if(!isset($_SESSION['logged'])){
        redirect('users/login');
      }


     $this->flightModel =$this->model('Flight');
}

public function index(){

    $flights=$this->flightModel->getFlight();
    $data = [
        'flights' => $flights 
    ] ;
    $this->view('flights/dashboard' ,$data);
    $this->view('flights/showR');
    
      

  
}


public function add(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [ 
          'LieuDepart' => ($_POST['ldepart']),
          'LieuArrive' => ($_POST['larrive']),
          'DateDepart' => ($_POST['ddepart']),
          'DateArrive' => ($_POST['darrive']),
          'NBR_place' =>  ($_POST['place']),
          'Prix' => ($_POST['prix']),
        ];
        if($this->flightModel->addflight($data)){
            redirect('flights/dashboard');
        }


} else {
     $this->view('flights/add');
}
}

public function edit($id){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [ 
            'ID_VOL '=>$id,
          'LieuDepart' => ($_POST['ldepart']),
          'LieuArrive' => ($_POST['larrive']),
          'DateDepart' => ($_POST['ddepart']),
          'DateArrive' => ($_POST['darrive']),
          'NBR_place' =>  ($_POST['place']),
          'Prix' => ($_POST['prix']),
        ];
        if($this->flightModel->updateflight($data)){
            redirect('flights/dashboard');
        }


} else {
    $flight =$this->flightModel->getflightById($id);
    $data =[
        'id'=>$id,
        'LieuDepart' => $flight->LieuDepart,
        'LieuArrive' =>$flight->LieuArrive,
        'DateDepart' =>$flight->DateDepart ,
        'DateArrive' =>$flight->DateArrive,
        'NBR_place' =>$flight->NBR_place,
        'Prix' =>$flight->Prix
    ];
     $this->view('flights/edit' ,$data);
}
}

public function show($id){
    $flight = $this->flightModel->getFlightById($id);
    $data=[
        'flight' => $flight  
    ];
    $this->view('flights/show',$data);
}

public function delete($id){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($this->flightModel->deleteFlight($id)){
            flash('flight_message' ,'flight remove');
            redirect('flights');
        } else{
            die('Somthing went wrong');
        }
    } else {
       redirect('flights');
    }

}

public function flightDest(){
    $flights=$this->flightModel->getFlightbyDest($this->huh);
  
     $data=[
         'flights' => $flights 
          

     ];
     $this->view('pages/index',$data);
}




}