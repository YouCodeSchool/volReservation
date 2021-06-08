<?php require APPROOT . '/views/inc/header.php'; ?>

  <div class="row" style="margin-top: 150px;">
    <div class="col-md-6">
      <h1>Posts</h1>
    </div>
    <div class="col-md-6">
      <a href="<?php echo URLROOT; ?>/flights/add" class="btn btn-primary pull-right">
         Add Post
      </a>
       <a href="<?php echo URLROOT; ?>/reservation/showreserv" class="btn btn-primary pull-right">
         Show RESERVATION
      </a>
    </div>
   
  </div>
      <?php foreach($data['flights'] as $flight) : ?>
    <div class="card card-body mb-3" style="margin-top: 100px;">
      <h4 class="card-title">  vol :<?php echo $flight->ID_VOL ?></h4>
      <div class="bg-light p-2 mb-3">
        from <?php echo $flight->LieuDepart; ?>TO <?php echo $flight->LieuArrive; ?>
      </div>
       <div class="bg-light p-2 mb-3">
          <?php echo $flight->DateDepart; ?>  <?php echo $flight->DateArrive; ?>
      </div>
      
      <a href="<?php echo URLROOT; ?>/flights/show/<?php echo $flight->ID_VOL?>" class="btn btn-dark">More</a>
    </div>
  <?php endforeach; ?>


  




<?php require APPROOT . '/views/inc/footer.php'; ?>