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
        <a class="nav-link" href="employeescreen.php" style="color: white; font-family: serif;">Employee </a>
      </li>
      
        <a class="nav-link" href="menue.php" style="color: white; font-family: serif;">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="salese.php" style="color: white; font-family: serif;">Orders</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="reservationse.php" style="color: white; font-family: serif;">Table Reservations</a>
      </li>

    </ul>
  </div>
</nav>


<div class="create_b">
	<button id="add_item" >Add Inventory Item</button>
</div>



 

<!-- The Modal -->
<div id="additem_form" class="modal" style="height: 550px;">

  <!-- Modal content -->
  <div class="form_content" style="height: 400px;">
    <span class="close">&times;</span>

	<h1>ADD ITEM</h1> <br>


	<form action="includes/inventory.inc.php" method="post">

    <p>Item Name</p>
<input type="text" name="itemname" placeholder="Enter Item's Name">
  <p>Added By</p>
<input type="int" name="addedby" placeholder="Enter Employee's ID">

  <p> Available Quantity</p>
  <input type="int" name="availablequantity" placeholder="Enter Quantity">
  <p>Minimum Required</p>
  <input type="int" name="minimum" placeholder="Enter minimum quantity required">
  <p>Last Shipment Date</p>
  <input type="date" name="shipmentdate" placeholder="Enter date">
  <input type="submit" name="submit" value="Submit" onclick="addRow('inventorytable')"> <br><br>
  </form>





  </div>
</div>


 
<table class="table table-bordered" id="inventorytable" style="position: absolute;top: 28%; left: 10%; width: 80%; background-color:#D1CDC4; opacity: .9; text-align: center; ">
  <thead>
    <tr style="font-weight: bolder; ">
      <th scope="col" style="width: 100px;">Item Code</th>
      <th scope="col" style="width: 100px;">Added By</th>
      <th scope="col" style="width: 200px;">Item Name</th>
      <th scope="col" style="width: 200px">Quantity Available</th>
      <th scope="col" style="width: 200px">Minimum Required</th>
      <th scope="col" style="width: 200px">Date of Last Shipment</th>
<th scope="col" style="width: 50px">Delete?</th>

    </tr>
  </thead>
  <tbody>
   <<?php

$sql = "SELECT * FROM inventory;";
$result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["item_id"] . "</td><td>". $row["added_by"]. "</td><td>". $row["item_name"]. "</td><td>". $row["available_quantity"]. "</td><td>".$row["minimum_required"]. "</td><td>" . $row["last_shipment"]. "</td><td><a href=includes/inventorydelete.php?iid=" .$row["item_id"]."> Delete </a></td></tr>";
  }
   
?>
  
  </tbody>
</table>




<button onclick="window.location.href='/Tabaq Coffee/salese.php'" style="font-family: serif; border:none; outline: none; position: absolute; top: 20%; left: 33%; height: 35px; background-color:#110B0D; opacity: 0.8; color:#FFF; font-size: 16px;">Manage Orders</button>






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























