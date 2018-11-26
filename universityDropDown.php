
      <?php
      	require('connect.php');

        //get all universities
      	$getTableQuery = "SELECT *
      					 FROM 'university'";
        $result = mysqli_query($connect, $getTableQuery);
        

        //drop down opening html tags
        echo '<div class="form-group col-sm-6 col-md-6 col-lg-6"><label>University</label><select  class="form-control"><option selected>Choose...</option>';

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          //place each university name as an option
          echo '<option>';
          echo  $row['uniName'];
          echo '</option>';
        }

        echo ' </select></div>'; //close select and div.
      ?>