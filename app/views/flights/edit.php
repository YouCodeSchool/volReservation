 
 <?php require APPROOT . '/views/inc/header.php'; ?>
 
 <a href="<?php echo URLROOT; ?>/filghts/add" class="btn btn-light"><i class="fa fa-backward" ></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Edit Flight</h2>
    <p>Create a flight with this form</p>
    <form action="<?php echo URLROOT; ?>/flights/edit/<?php echo $data['id'];?>" method="post">
      <div class="form-group">
        <label for="title">lieu Depart: <sup>*</sup></label>
        <input type="text" name="ldepart" class="form-control form-control-lg <?php  ?>" value="<?php  echo $data['LieuDepart']; ?>">
      </div>
       <div class="form-group">
        <label for="title">lieu Arrive: <sup>*</sup></label>
        <input type="text" name="larrive" class="form-control form-control-lg <?php  ?>" value="<?php  echo $data['LieuArrive']; ?>">
      </div>
        <div class="form-group">
        <label for="title">Date Depart: <sup>*</sup></label>
        <input type="datetime" name="ddepart" class="form-control form-control-lg <?php  ?>" value="<?php   echo $data['DateDepart']; ?>">
      </div>
       <div class="form-group">
        <label for="title" >Date Arrive: <sup>*</sup></label>
        <input type="datetime" name="darrive" class="form-control form-control-lg <?php  ?>" value="<?php   echo $data['DateArrive'];?>">
      </div>
       <div class="form-group">
        <label for="title">places: <sup>*</sup></label>
        <input type="number" name="place" class="form-control form-control-lg <?php  ?>" value="<?php  echo $data['NBR_place']; ?>">
      </div>
       <div class="form-group">
        <label for="title">prix <sup>*</sup></label>
        <input type="text" name="prix" class="form-control form-control-lg <?php  ?>" value="<?php  echo $data['Prix'];?>">
      </div>

      
      <input type="submit" class="btn btn-success" value="Submit">
    </form>

    <?php require APPROOT . '/views/inc/footer.php'; ?>