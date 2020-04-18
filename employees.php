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
    <link rel="stylesheet" type="text/css" href="inventory.css">
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







<!-- EMPLOYEE BUTTON AND FORM-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEmployee" style="font-family: serif; border:none; outline: none; position: absolute; top: 20%; left: 22%; height: 35px; background-color:#110B0D; opacity: 0.8; color:#FFF; font-size: 16px;">
 Add Employee
</button>

<!-- Modal -->
<div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="addEmployeeLabel" aria-hidden="true" style="height: 1000px;">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addEmployeeLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

<div id="addemployee_form"  style="width: 500px; height: 570px;">

  <!-- Modal content -->
  <div class="form_content">

  <h1>ADD EMPLOYEE</h1> 


  
  <form action="includes/employees.inc.php" method="post">
 <p style="padding-right: 20px;">Date Joined</p>
<input type="date" name="datejoined" placeholder="Enter date" style=" width: 90%; position: absolute;"><br><br>

    <p style="padding-right: 20px;">Name</p>
<input type="text" name="employeename" placeholder="Enter name" style=" width: 90%; position: absolute;"><br><br>

  <p style="padding-right: 20px;">Designation</p>
  <input type="text" name="designation" placeholder="Enter designation" style=" width: 90%; position: absolute;"><br><br>

  <p style="padding-right: 20px;">Gender</p>
  <input type="text" name="gender" placeholder="Enter Gender" style=" width: 90%; position: absolute;"><br><br>

<p style="padding-right: 20px;">Date of Birth</p>
<input type="date" name="DOB" placeholder="Enter date" style=" width: 90%; position: absolute;"><br><br>

  <p style="padding-right: 20px;">Contact</p>
  <input type="number" name="contactnumber" placeholder="Enter contact number" style=" width: 90%; position: absolute;"><br><br><br>
  <input type="submit" name="submit" value="Submit" style=" width: 80%; position: absolute;left: 10%;" onclick="addRow('employeetable')"> <br><br>
  </form>


  </div>
</div>
      </div>
     
    </div>
  </div>
</div>

 
<table class="table table-bordered" id="employeetable" style="position: absolute;top: 28%; left: 10%; width: 80%; background-color:#D1CDC4; opacity: .9; text-align: center; ">
  <thead>
    <tr style="font-weight: bolder; ">
      <th scope="col" style="width: 100px;">ID</th>
      <th scope="col" style="width: 200px">Date Joined</th>
      <th scope="col" style="width: 200px;">Name</th>
      <th scope="col" style="width: 200px">Designation</th>
      <th scope="col" style="width: 200px">Gender</th>
      <th scope="col" style="width: 200px">DOB</th>
      <th scope="col" style="width: 200px">Contact</th>

<th scope="col" style="width: 50px">Delete?</th>

    </tr>
  </thead>
  <tbody>
   <<?php

$sql = "SELECT * FROM employee;";
$result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["emp_id"]. "</td><td>". $row["emp_date"]. "</td><td>". $row["emp_name"]. "</td><td>". $row["emp_designation"]. "</td><td>". $row["emp_gender"]. "</td><td>" . $row["emp_DOB"]. "</td><td>". $row["emp_contact"]. "</td><td><a href=includes/employeedelete.php?eid=" .$row["emp_id"]."> Delete </a></td></tr>";
  }
   
?>
  
  </tbody>
</table>



<button onclick="window.location.href='/Tabaq Coffee/sales.php'" style="font-family: serif; border:none; outline: none; position: absolute; top: 20%; left: 33%; height: 35px; background-color:#110B0D; opacity: 0.8; color:#FFF; font-size: 16px;">Manage Orders</button>






<script type="text/javascript">
// Get the modal
var modal = document.getElementById("additem_form");

// Get the button that opens the modal
var btn = document.getElementById("add_item");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>























