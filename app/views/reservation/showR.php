  <?php require APPROOT . '/views/inc/header.php'; ?>
   <table class="table table-striped ">
            <thead>
            <tr>
                <th scope="col">Reservation</th>
                <th scope="col">User</th>
                <th scope="col">Vol</th>
                <th scope="col">DateReservation</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data['hamza'] as $res) {
              
                echo '<tr>
                    <th scope="row">' . $res->ID_Reservation. '</th>
                     <td class="date_flight">' . $res->ID_u . '</td>
                     <td class="date_flight">' . $res->ID_v . '</td>             
                     <td class="date_flight">' . $res->Date_Reservation .'</td>              
                </tr>';
            }
            ?>
            </tbody>
        </table>
        <?php require APPROOT . '/views/inc/footer.php'; ?>