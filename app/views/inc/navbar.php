
      
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-3 ">
<div class="container">
  <a class="navbar-brand" href=""><?php echo  SITENAME ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo URLROOT?>/pages/index">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT?>/pages/about">about</a>
      </li>
   
<?php if(isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
        </li>
   

      <?php endif; ?>
       </ul>
      
  </div>
  </div> 
</nav>