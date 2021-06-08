<?php require APPROOT .'/views/inc/header.php'; 



?>




<!-- <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3"><?php echo $data['title']; ?></h1>
  <P class="lead"><?php echo $data['description'];?></P>
  

  </div>
</div> -->
 <div id="carouselSlidesOnly" class="carousel slide pointer-event" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../public/img/julian-hochgesang-s4i33r-KszI-unsplash.jpg" class="d-block w-100" alt="Slide 1" >
   
  </div>
</div>
 <div class="col-md-6" style="position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
          ">
        <div id="logbox"style="opacity: 0.9;" >
          <form action="/VolReservation/flights/flightDest" method="POST">
       
            <h1 class="text-center">Flights</h1><br/>
      
          <div class="d-flex flex-column align-items-center" style="gap:20px; ">  
            <input style="width: 400px;" name="LieuDepart" id="LieuD" type="text" placeholder="From" class="input pass" >
            <input style="width: 400px;" name="LieuArrive" id="LieuA" type="text" placeholder="To" class="input pass">
            <input style="width: 400px;" id="LieuA" type="number" min="0" max="100" placeholder="Passengers" value="0" name="passengers" class="input pass">

            </div>

            <button  class="mx-auto d-block" type="submit" value="Show Flights" name="search" class="inputButton" id="btn"  style=" margin-toP:20px;color: rgb(0, 0, 0);">search</button>
   

          </form>
          </div>  
        </div>  
        </div>

        <!-- card -->
        <!-- <div class="card" style="    width: 700PX;
    MARGIN: 0 auto;
    margin-top: 20PX;">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  
</div>
  <div class="card" style="    width: 700PX;
    MARGIN: 0 auto;
    margin-top: 20PX;">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary" >Go somewhere</a>
  </div>
  
</div> -->
<?php if(isset($data['flights'])):?>
 <?php foreach($data['flights'] as $flight) : ?>
    <form action="http://localhost/VolReservation/reservation/reserver" method="post" class="card card-body mb-3" style="margin-top: 100px;">
      <h4 class="card-title" name="id">  vol :<?php echo $flight->ID_VOL ?></h4>
      <h5> my name is <?php echo $_SESSION['user_id'] ?> </h5>
      <input type="hidden" name="ID_U" value="<?php echo $_SESSION['user_id'] ?>">
      <input type="hidden" name="ID_V" value="<?php echo $flight->ID_VOL ?>">
      <input type="hidden" name="passengers" value="<?php echo $_POST['passengers'] ?>">
      <div class="bg-light p-2 mb-3">
        from <?php echo $flight->LieuDepart; ?>TO <?php echo $flight->LieuArrive; ?>
      </div>
       <div class="bg-light p-2 mb-3">
          <?php echo $flight->DateDepart; ?>   <?php echo $flight->DateArrive; ?>
      </div>
       <div class="bg-light p-2 mb-3">
          <?php echo $flight->NBR_place; ?>  
      </div>
        <div class="bg-light p-2 mb-3">
          <?php echo $flight->Prix; ?>  
      </div>
      <input type="submit" name="reserveNow" class="btn btn-dark" value="Reserver Now">
    </form>
  <?php endforeach; ?>
<?php endif ?>





<?php require APPROOT .'/views/inc/footer.php';?>


