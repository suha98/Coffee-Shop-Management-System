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
    <link rel="stylesheet" type="text/css" href="sales.css">
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
  </script> 
  
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
 <li>
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



	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#receiveOrder" style="font-family: serif; border:none; outline: none; position: absolute; top: 20%; left: 10%; height: 35px; background-color:#110B0D; opacity: 0.8; color:#FFF; font-size: 16px;">
 Receive Order
</button>

<!-- Modal -->
<div class="modal fade" id="receiveOrder" tabindex="-1" role="dialog" aria-labelledby="receiveOrderLabel" aria-hidden="true" style="height: 1000px;">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

<div id="receiveOrder_form"  style="width: 500px; height: 570px;">

  <!-- Modal content -->
  <div class="form_content">

  <h1>RECEIVE ORDER</h1> 


  
  <form action="includes/sales2.inc.php" method="post">

    <p style="padding-right: 20px;">Employee ID</p>
<input type="int" name="empID" placeholder="Enter your ID" style=" width: 90%; position: absolute;"><br><br>

   <p style="padding-right: 20px;">Order ID</p>
<input type="int" name="orderID" placeholder="Enter order ID" style=" width: 90%; position: absolute;"><br><br>
  
  <input type="submit" name="submit" value="Submit" style=" width: 80%; position: absolute;left: 10%;"> <br><br>
  </form>





  </div>
</div>
      </div>
     
    </div>
  </div>
</div>









<table class="table table-bordered" id="saletable" style="position: absolute;top: 28%; left: 10%; width: 80%; background-color:#F6CA45; opacity: .9; text-align: center; ">
  <thead>
    <tr style="font-weight: bolder; font-family: ;color: brown;">
      <th scope="col" style="width: 70px;">Order ID</th>
      <th scope="col" style="width: 100px;">Date</th>
      <th scope="col" style="width: 70px;">Customer ID</th>
      <th scope="col" style="width: 70px;">Recieved By</th>
      <th scope="col" style="width: 100px">Item</th>
      <th scope="col" style="width: 100px">Price</th>
      <th scope="col" style="width: 100px">Quantity</th>
            <th scope="col" style="width: 100px">Total</th>
<th scope="col" style="width: 50px">Delete?</th>

    </tr>
  </thead>
  <tbody>
   <<?php

$sql = "SELECT * FROM sales;";
$result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["sale_id"]. "</td><td>". $row["sale_date"]. "</td><td>". $row["ordered_by"] . "</td><td>". $row["received_by"] . "</td><td>". $row["sale_item"]. "</td><td>".$row["sale_price"]. "</td><td>" . $row["sale_quantity"]. "</td><td>" . $row["sale_total"].  "</td><td><a href=includes/saledelete.php?sid=" .$row["sale_id"]."> Delete </a></td></tr>";
  }
   
?>
  
  </tbody>
</table>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>























