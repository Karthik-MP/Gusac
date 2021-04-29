<!-- Start of header -->
<?php include 'header.php'; ?>
<!-- End of header -->
<?php include "ajax_load/connect.php"; ?>
<section class="member_display">
<div class="container">
<center><h2>Members</h2></center>
<center><button class="btn btn-sm btn-primary" onclick="exportData()"><i class="fa fa-download"></i> Download</button></center>
<br>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>
<div class="table-responsive">
  <table id="mytable" class='table table-bordered table-striped'>
        <thead>
          <tr>
            <th>Register Number</th>
            <th>Full Name</th>
            <th>Stream</th>
            <th>Branch</th>
            <th>Year</th>
            <th>Email</th>
            <th>Phone no</th>
            <th>Flags</th>
            <th> Add or Remove </th>
          </tr>
        </thead>
        <tbody id='myTable'>
    <?php 
        $query="SELECT  `first_name`, `last_name`, `registration_number`, `stream`, `branch`, `yop`, `country`, `number`, `email` , `status` FROM `register_member` ";
        $result = $con->query($query);
      
        if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $a=4-($row['yop']-date("Y"));
        echo "<tr>";
        echo "<td>".$row['registration_number']."</td>";
        echo "<td>".$row['first_name']." ".$row['last_name']."</td>";
        echo "<td>".$row['stream']."</td>";
        echo "<td>".$row['branch']."</td>";
        echo "<td>".$a."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>+".$row['country']." ".$row['number']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td><button type='button' class='btn btn-sm  btn-warning'>Add Flag</button>&nbsp&nbsp<button type='button' class='btn btn-sm btn-danger'>Remove</button></td>";
        echo "</tr>";
        }
        }
        echo  "</tbody></table>";
    ?>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</section>
<!-- Start of footer -->
<?php include 'footer.php'; ?>
<!-- End of footer -->
