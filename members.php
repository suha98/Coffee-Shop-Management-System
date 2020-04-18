<?php

require 'includes/dbh.inc.php'

?>
<!DOCTYPE html>
<html>
<head>
<title>Tabaq Coffee</title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="members.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #110B0D; opacity: 0.7;">
  <a class="navbar-brand" href="#" style="color: white; font-family: serif;">TABAQ COFFEE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
<li class="nav-item">
        <a class="nav-link" href="header.php" style="color: white; font-family: serif;">Signout</a>
      </li>
             <li class="nav-item">
        <a class="nav-link" href="employees.php" style="color: white; font-family: serif;">Employee </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="members.php" style="color: white; font-family: serif;">Customer</a>
      </li>
        <a class="nav-link" href="menu.php" style="color: white; font-family: serif;">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sales.php" style="color: white; font-family: serif;">Orders</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="reservations.php" style="color: white; font-family: serif;">Table Reservations</a>
      </li>

 <li class="nav-item">
        <a class="nav-link" href="feedback.php" style="color: white; font-family: serif;">Feedback</a>
      </li>
    </ul>
  </div>
</nav>



<!--THIS IS THE ADD MEMBER BUTTON'S CODE-->

<button type="button" id = "add_member" class="btn btn-primary" data-toggle="modal" data-target="#addMember">
 Add Member
</button>

<!-- Modal -->
<div class="modal fade" id="addMember" tabindex="-1" role="dialog" aria-labelledby="addMemberLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

<div>

  <!-- Modal content -->
  <div class="form_content">

  <h1>ADD CUSTOMER</h1> <br>




  <form action="includes/members.inc.php" method="post" style="">

    
      <p style="padding-right: 20px;">Customer Name</p>
      <input type="text" name="membername" placeholder="Enter Customer's name" align="right"  style=" width: 90%; position: absolute;"><br><br>
 <p style="padding-right: 20px;">Address</p>
      <input type="text" name="address" placeholder="Enter Address" align="right"  style=" width: 90%; position: absolute;"><br><br>
       <p style="padding-right: 20px;"> Date Joined</p>
       <input type="Date" name="datejoined" placeholder="Date Joined" align="right" style=" width: 90%; position: absolute;"><br><br>
      <p style="padding-right: 10px;">Contact Number</p>
       <input type="number" name="contact" placeholder="Enter contact number" align="right"  style=" width: 90%; position: absolute;"><br><br>
      <p style="padding-right: 80px;">Email</p>
      <input type="text" name="email" placeholder="Enter email" align="right"  style=" width: 90%; position: absolute;"><br><br><br>
      <input type="submit" name="submit" value="Create" style=" width: 80%; position: absolute;left: 10%" onclick="addRow('membertable')"> <br><br>
  </form>




  </div>
</div>
      </div>
     
    </div>
  </div>
</div>




<!--THIS IS THE MEMBER INFORMATION TABLE-->
 
<table class="table table-bordered" id="membertable" style="position: absolute;top: 28%; left: 10%; width: 80%; background-color:white; opacity: .9; text-align: center; ">
  <thead>
    <tr style="font-weight: bolder;font-style: serif; ">
      <th scope="col" style="width: 50px;">Member ID</th>
      <th scope="col" style="width: 100px">Name</th>
      <th scope="col" style="width: 100px">Address</th>
      <th scope="col" style="width: 100px;">Date Joined</th>
      <th scope="col" style="width: 100px">Contact Number</th>
            <th scope="col" style="width: 100px">Email</th>
<th scope="col" style="width: 50px">Delete?</th>

    </tr>
  </thead>
  <tbody>
   <<?php

$sql = "SELECT * FROM members;";
$result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["member_id"]. "</td><td>". $row["member_name"]. "</td><td>". $row["member_address"] ."</td><td>". $row["member_date"]. "</td><td>".$row["member_contact"]. "</td><td>" . $row["member_email"]. "</td><td><a href=includes/memberdelete.php?mid=" .$row["member_id"]."> Delete </a></td></tr>";
  }
   
?>
  
  </tbody>
</table>










<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>























