<?php require APPROOT . '/views/inc/header.php'; ?>


<h1 style="margin-top:200px;">VOL:<?php echo $data['flight']->ID_VOL ;?></h1>
<div class="bg-secondary text-white p-2 mb-3">
<span> nmobre place =<?php echo $data['flight']->NBR_place ;?> </span>
</div>
<div class="bg-secondary text-white p-2 mb-3">
<span> Prix =<?php echo $data['flight']->Prix;?> </span>
</div>
<hr>

  <a href="<?php echo URLROOT; ?>/flights/edit/<?php echo $data['flight']->ID_VOL; ?>" class="btn btn-dark">Edit</a>

  <form class="text-right" action="<?php echo URLROOT; ?>/flights/delete/<?php echo $data['flight']->ID_VOL; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>





<?php require APPROOT . '/views/inc/footer.php'; ?>
