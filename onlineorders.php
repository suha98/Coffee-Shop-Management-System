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
    <link rel="stylesheet" type="text/css" href="onlineorders.css">
</head>
<body style="background-image: url(https://s1.1zoom.me/big0/385/353470-svetik.jpg ); background-size: cover;">

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
        <a class="nav-link" href="menu.php" style="color: white; font-family: serif;">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sales.php" style="color: white; font-family: serif;">Sales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="onlineorders.php" style="color: white; font-family: serif;">Online Order</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="reservations.php" style="color: white; font-family: serif;">Table Reservations</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="inventory.php" style="color: white; font-family: serif;">Inventory Stock</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="members.php" style="color: white; font-family: serif;">Member Details</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="employees.php" style="color: white; font-family: serif;">Employee Details</a>
      </li>

 <li class="nav-item">
        <a class="nav-link" href="feedback.php" style="color: white; font-family: serif;">Feedback</a>
      </li>
    </ul>
  </div>
</nav>


<div class="create_b">
	<button id="new_order" >New Order</button>
</div>



 
<table class="table table-bordered" id="ordertable" style="position: absolute;top: 28%; left: 10%; width: 80%; background-color:#F0E3D2; opacity: .9; text-align: center; ">
  <thead>
    <tr style="font-weight: bolder; ">
      <th scope="col" style="width: 100px;">Order ID</th>
      <th scope="col" style="width: 150px;">Date</th>
      <th scope="col" style="width: 300px">Order Details</th>
      <th scope="col" style="width: 200px">Total</th>
        <th scope="col" style="width: 200px">Contact Number</th>
      <th scope="col" style="width: 300px">Delivery Address</th>
<th scope="col" style="width: 50px">Delete?</th>

    </tr>
  </thead>
  <tbody>
   <<?php

$sql = "SELECT * FROM onlineorders;";
$result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["order_id"]. "</td><td>". $row["order_date"]. "</td><td>". $row["order_details"]. "</td><td>".$row["order_total"]. "</td><td>" . $row["order_contact"]. "</td><td>" . $row["order_address"]. "</td><td><a href=includes/orderdelete.php?oid=" .$row["order_id"]."> Delete </a></td></tr>";
  }
   
?>
  
  </tbody>
</table>




<!-- The Modal -->
<div id="neworder_form" class="modal">

  <!-- Modal content -->
  <div class="form_content">
    <span class="close">&times;</span>

	<h1>NEW ORDER</h1> <br>


	<form action="includes/onlineorders.inc.php" method="post">

    <p>Date</p>
<input type="date" name="orderdate" placeholder="Enter date">

  <p> Order details</p>
  <input type="text" name="orderdetails" placeholder="Enter order details">
  <p>Total</p>
  <input type="number" name="ordertotal" placeholder="Enter total">
  <p>Contact Number</p>
  <input type="number" name="contact" placeholder="Enter contact number">
   <p> Delivery Address</p>
  <input type="text" name="deliveryaddress" placeholder="Enter address">
  <input type="submit" name="submit" value="Submit" onclick="addRow('ordertable')"> <br><br>
  </form>





  </div>
</div>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById("neworder_form");

// Get the button that opens the modal
var btn = document.getElementById("new_order");

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























