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
    <link rel="stylesheet" type="text/css" href="reservations.css">
</head>
<body> 




 
<table class="table table-bordered" id="feedbacktable" style="position: absolute;top: 10%; left: 5%; width: 80%; background-color:#D1CDC4; opacity: .9; text-align: center; overflow: scroll;">
  <thead>
    <tr style="font-weight: bolder; ">
      <th scope="col" style="width: 100px;">Date</th>
       <th scope="col" style="width: 100px;">Feedback Number</th>
      <th scope="col" style="width: 200px;">Customer ID</th>
      <th scope="col" style="width: 200px">Food Quality</th>
      <th scope="col" style="width: 200px">Service</th>
      <th scope="col" style="width: 200px">Cleanliness</th>
      <th scope="col" style="width: 200px">Suggestions</th>
      <th scope="col" style="width: 100px">Name</th>
      <th scope="col" style="width: 100px">Address</th>
      <th scope="col" style="width: 100px;">Date Joined</th>
      <th scope="col" style="width: 100px">Contact Number</th>
            <th scope="col" style="width: 100px">Email</th>

    </tr>
  </thead>
  <tbody>
   <<?php

$sql = "SELECT * FROM feedback INNER JOIN members ON feedback.customer_id = members.member_id";
$result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["feedback_date"]. "</td><td>". $row["feedback_number"]. "</td><td>". $row["customer_id"]. "</td><td>".$row["feedback_foodquality"]. "</td><td>" . $row["feedback_service"]. "</td><td>" . $row["feedback_clean"]. "</td><td>" . $row["feedback_suggestions"]. "</td><td>". $row["member_name"]. "</td><td>". $row["member_address"] ."</td><td>". $row["member_date"]. "</td><td>".$row["member_contact"]. "</td><td>" . $row["member_email"] ."</td></tr>";
  }
   
?>
  
  </tbody>
</table>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>















