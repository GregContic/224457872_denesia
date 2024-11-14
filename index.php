<?php include('header.php'); ?>
<?php include('baskemtbol.php'); ?>
    <div class="box1">
    <h2>TOP PLAYERS OF THE 2010 DECADE</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD PLAYER</button>
    </div>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>Ranking</th>
                <th>Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "select * from `players`";
            $result = mysqli_query($connection, $query);

            if(!$result){
                die("Query failed".mysqli_error());
            }else{
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['position']; ?></td>
                        </tr>

                    <?php
                }
                mysqli_free_result($result);
            }

            ?>
            
            
        </tbody>
        
    </table>
    <form action="">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Players</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="id">Ranking</label>
          <input type="text" name="id" class="form-control">
        </div>
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </form>
    
    <?php include('footer.php'); ?>