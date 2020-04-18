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



<button onclick="window.location.href='/Tabaq Coffee/joining.php'" style="font-family: serif; border:none; outline: none; position: absolute; top: 20%; left: 33%; height: 35px; background-color:#110B0D; opacity: 0.8; color:#FFF; font-size: 16px;">View Details</button>

 
<table class="table table-bordered" id="feedbacktable" style="position: absolute;top: 28%; left: 10%; width: 80%; background-color:#D1CDC4; opacity: .9; text-align: center; ">
  <thead>
    <tr style="font-weight: bolder; ">
      <th scope="col" style="width: 100px;">Date</th>
       <th scope="col" style="width: 100px;">Feedback Number</th>
      <th scope="col" style="width: 200px;">Customer ID</th>
      <th scope="col" style="width: 200px">Food Quality</th>
      <th scope="col" style="width: 200px">Service</th>
      <th scope="col" style="width: 200px">Cleanliness</th>
      <th scope="col" style="width: 200px">Suggestions</th>

<th scope="col" style="width: 50px">Delete?</th>

    </tr>
  </thead>
  <tbody>
   <<?php

$sql = "SELECT * FROM feedback;";
$result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["feedback_date"]. "</td><td>". $row["feedback_number"]. "</td><td>". $row["customer_id"]. "</td><td>".$row["feedback_foodquality"]. "</td><td>" . $row["feedback_service"]. "</td><td>" . $row["feedback_clean"]. "</td><td>" . $row["feedback_suggestions"]. "</td><td><a href=includes/feedbackdelete.php?fnum=" .$row["feedback_number"]."> Delete </a></td></tr>";
  }
   
?>
  
  </tbody>
</table>






</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>























