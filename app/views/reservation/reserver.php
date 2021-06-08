<?php require APPROOT . '/views/inc/header.php';


// if($_SESSION['start']=true){
//   redirect('reservation/reserver');
// }
?>

<div class="card card-body bg-light mt-5">
    <h2>RESERVER Flight</h2>
    <!-- <p>Create a flight with this form</p> -->
      <form action="http://localhost/VolReservation/reservation/add/<?php echo $_SESSION["user_id"]?>" method="POST">
      <!-- <div class="form-group">
        <label for="title">Name: <sup>*</sup></label>
        <input type="text" name="Name" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
      </div>
       <div class="form-group">
        <label for="title">Num Passport: <sup>*</sup></label>
        <input type="text" name="passport" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
      </div>
       <div class="form-group">
        <label for="title">Telephone <sup>*</sup></label>
        <input type="text" name="telephone" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
      </div> -->

      <div class="passengers">
          
      </div>
       <!-- <div class="form-group">
        <label for="title">Passager <sup>*</sup></label>
        <input type="number" name="telephone" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
        <button  class="btn btn-success">add passager</button>
      </div> -->

      <input type="hidden" name="ID_U" value="<?php echo $_SESSION['user_id']?>">
      <input type="hidden" name="ID_V" value="<?php echo $_POST['ID_V']?>">
      <input type="hidden"  id="passengers" name="passengers" value="<?php echo $_POST['passengers'] ?>">
      <button type="submit" class="btn btn-success" value="RESERVER"  >RESERVER</button>
    </form>
  </div>

  <script>
    var passengers = document.querySelector('.passengers')
    var inputs = document.createElement('div')
    var pass = document.querySelector('#passengers').value
    var count=0;
    for(i=0; i<pass;i++){
        count++;
    inputs.innerHTML=`
          <div class="form-group">
          <h3>Passenger n°${count}</h3>
          <label for="title">Name: <sup>*</sup></label>
          <input type="text" name="Name[]" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
        </div>
        <div class="form-group">
          <label for="title">Num Passport: <sup>*</sup></label>
          <input type="text" name="passport[]" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
        </div>
        <div class="form-group">
          <label for="title">Telephone <sup>*</sup></label>
          <input type="text" name="telephone[]" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
        </div>
    
    `
        passengers.appendChild(inputs.cloneNode(true));
        
}
  </script>






<?php require APPROOT . '/views/inc/footer.php'; ?>