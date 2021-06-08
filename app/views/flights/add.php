<?php require APPROOT . '/views/inc/header.php'; ?>
 <!-- <form action="" method="POST">
            <h1 style="color:#757575;">Flight</h1><br/>
            
            
            <input name="LieuDepart"  type="text" placeholder="Lieu Depart" class="input pass">
            <input name="LieuArrive"  type="text" placeholder="Lieu Arrive" class="input pass">
            <p style="color:#757575; text-align:center">DateDepart</p><input name="DateDepart"  type="date" class="input pass">
            <p style="color:#757575; text-align:center">Date Arrive</p><input name="DateArrive"  type="date" placeholder="Date Arrive" class="input pass">
            <input name="NbPlace"  type="text" placeholder="Nombre Placee" class="input pass">
            <input name="Prix"  type="text" placeholder="Prix" class="input pass">
            <input type="submit" value="Add Flight" name="AddVol" class="inputButton" id="btn">
          

            </form> -->
              <a href="<?php echo URLROOT; ?>/filghts/add" class="btn btn-light"><i class="fa fa-backward" ></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Add Flight</h2>
    <p>Create a flight with this form</p>
    <form action="<?php echo URLROOT; ?>/flights/add" method="post">
      <div class="form-group">
        <label for="title">lieu Depart: <sup>*</sup></label>
        <input type="text" name="ldepart" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
      </div>
       <div class="form-group">
        <label for="title">lieu Arrive: <sup>*</sup></label>
        <input type="text" name="larrive" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
      </div>
        <div class="form-group">
        <label for="title">Date Depart: <sup>*</sup></label>
        <input type="date" name="ddepart" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
      </div>
       <div class="form-group">
        <label for="title" >Date Arrive: <sup>*</sup></label>
        <input type="date" name="darrive" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
      </div>
       <div class="form-group">
        <label for="title">places: <sup>*</sup></label>
        <input type="number" name="place" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
      </div>
       <div class="form-group">
        <label for="title">prix <sup>*</sup></label>
        <input type="text" name="prix" class="form-control form-control-lg <?php  ?>" value="<?php  ?>">
      </div>
      <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>