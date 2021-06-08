<?php require APPROOT . '/views/inc/header.php';

?>


 <table class="table table-striped " style="margin-top:100px;"> 


             <thead>
            <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Name </th>
                <th scope="col">LieuDepart</th> 
                <th scope="col">LieuArrive</th>
                <th scope="col">DateDepart</th> 
                <th scope="col">DateArrive</th>
                <th scope="col">Vol</th>
                <!-- <th scope="col">reset place</th>
                <th scope="col">Trademark</th>
                <th scope="col">Admin</th>
                <th scope="col">Date Added</th>
                <th scope="col">Action</th> -->

            </tr>
            </thead>
                <tbody>
            
            <?php foreach($data['reservs'] as $reserv) : ?>
            <?php
                echo '<tr>
                    <th scope="row">' . $_SESSION['user_name']. '</th>
                    <td class="date_flight">' . $reserv->LieuDepart . '</td>
                    <td class="date_flight">' .$reserv->LieuArrive . '</td>
                    <td class="departure_flight">' . $reserv->ID_VOL. '</td>
                    <td class="date_flight">' .$reserv->DateDepart . '</td>
                    <td class="departure_flight">' . $reserv->DateArrive. '</td>
                </tr>';
                
            ?>
            
            <?php endforeach; ?>
            </tbody>
        </table>
            
            

  <?php foreach($data['passagers'] as $psgr) : ?>
            
      <div class="bg-light p-2 mb-3">
        <?php echo $psgr->Name; ?>
        </div>
        <div class="bg-light p-2 mb-3">
        <?php echo $psgr->Num_Passport; ?>
        </div>
        <div class="bg-light p-2 mb-3">
        <?php echo $psgr->Telephone; ?>
        </div>


         
         <?php endforeach; ?>

      
    
  
 
             
        


<?php require APPROOT . '/views/inc/footer.php';?>