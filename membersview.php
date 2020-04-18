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

       <li class="nav-item">
        <a class="nav-link" href="membersview.php" style="color: white; font-family: serif;">Customer</a>

    </ul>
  </div>
</nav>



<!--THIS IS THE ADD MEMBER BUTTON'S CODE-->



<!-- Modal -->


<!-- THIS IS THE PLACE ORDER BUTTON AND MODAL'S CODE-->

<!-- Button trigger modal -->
<button type="button" id = "place_order" class="btn btn-primary" data-toggle="modal" data-target="#placeOrder" style="font-family: serif; border:none; outline: none; position: absolute; top: 20%; left: 10%; height: 35px; background-color:#110B0D; opacity: 0.8; color:#FFF; font-size: 16px;">
  Place Order
</button>

<!-- Modal -->
<div class="modal fade" id="placeOrder" tabindex="-1" role="dialog" aria-labelledby="placeOrderLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

<div id="addsale_form">

  <!-- Modal content -->
  <div class="form_content">

  <h1>PLACE ORDER</h1> <br>


  <form action="includes/sales.inc.php" id = "salesform"method="post">

    
      <p style="padding-right: 20px;">Date</p>
      <input type="date" name="saledate" placeholder="Enter Date" align="right" style=" width: 90%; position: absolute;"> <br><br>
      <p style="padding-right: 20px;">Customer ID</p>
      <input type="text" name="salecustomerID" placeholder="Enter your ID" align="right" style=" width: 90%; position: absolute;"> <br><br>
      <p style="padding-right: 20px;"> Item Name </p>
       <input type="text" name="saleitem" placeholder="Enter item name" align="right" style=" width: 90%; position: absolute;"><br><br>
      <p style="padding-right: 20px">Price</p>
       <input type="number" id = "price" name="saleitemprice" placeholder="Item Price" align="right" style=" width: 90%; position: absolute;"></li><br><br>

      <p style="padding-right: 20px">Quantity</p>
      <input type="number" id = "quantity"name="saleitemquantity" placeholder="Enter quantity" align="right"style=" width: 90%; position: absolute;"></li><br><br><br>

  <input type="submit" name="submit" value="Create" style=" width: 80%; position: absolute;left: 10%; bottom: 7%;" onclick="addRow('saletable')"> <br><br>
  </form>

  </div>
</div>

      </div>
    </div>
  </div>
</div>


<!--THIS IS THE LEAVE FEEDBACK BUTTON AND MODAL'S CPDE-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#leaveFeedback" style="font-family: serif; border:none; outline: none; position: absolute; top: 20%; left: 20%; height: 35px; background-color:#110B0D; opacity: 0.8; color:#FFF; font-size: 16px;">
 Leave Feedback
</button>

<!-- Modal -->
<div class="modal fade" id="leaveFeedback" tabindex="-1" role="dialog" aria-labelledby="leaveFeedbackLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

<div id="feedback_form">

  <!-- Modal content -->
  <div class="form_content">

  <h1>Leave Feedback</h1> <br>


  <form action="includes/feedback.inc.php" id = "feedbackform"method="post">

     
      <p style="padding-right: 20px;">Date</p>
      <input type="date" name="feedbackdate" placeholder="Enter Date" align="right" style=" width: 90%; position: absolute;"> <br><br>

      <p style="padding-right: 20px;"> Customer ID </p>
       <input type="number" name="feedbackcustomer" placeholder="Enter Your ID" align="right" style=" width: 90%; position: absolute;"><br><br>
      <p style="padding-right: 20px">Food Quality</p>
       <input type="text" id = "foodquality" name="feedbackfoodquality" placeholder="Please Rate Our Food's Quality" align="right" style=" width: 90%; position: absolute;"><br><br>

      <p style="padding-right: 20px">Service</p>
      <input type="text" id = "service" name="feedbackservice" placeholder="Please Rate Our Service" align="right" style=" width: 90%; position: absolute;"><br><br>
       <p style="padding-right: 20px">Cleanliness</p>
      <input type="text" id = "clean" name="feedbackclean" placeholder="Please Rate Our Restaurant's Cleanliness" align="right" style=" width: 90%; position: absolute;"><br><br>

       <p style="padding-right: 20px">Suggestions</p>
      <input type="text" id = "suggestions" name="feedbacksuggestions" placeholder="Please Provide Your Valuable Suggestions" align="right" style=" width: 90%; position: absolute;"><br><br><br>

  <input type="submit" name="submit" value="Create" style=" width: 80%; position: absolute;left: 10%; bottom: 7%;" onclick="addRow('feedbacktable')"> <br><br>
  </form>


  </div>
</div>

      </div>
    
    </div>
  </div>
</div>


<!--THIS IS THE MAKE RESERVATION BUTTON AND MODAL'S CODE-->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookReservation" style="font-family: serif; border:none; outline: none; position: absolute; top: 20%; left: 33%; height: 35px; background-color:#110B0D; opacity: 0.8; color:#FFF; font-size: 16px;">
 Book Reservation
</button>

<!-- Modal -->
<div class="modal fade" id="bookReservation" tabindex="-1" role="dialog" aria-labelledby="bookReservationLabel" aria-hidden="true" style="height: 1000px;">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookReservationLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

<div id="addreserve_form"  style="width: 500px; height: 570px;">

  <!-- Modal content -->
  <div class="form_content">

  <h1>BOOK RESERVATION</h1> 


  
  <form action="includes/reservations.inc.php" method="post">

    <p style="padding-right: 20px;">Date</p>
<input type="date" name="datemade" placeholder="Enter date" style=" width: 90%; position: absolute;"><br><br>

  <p style="padding-right: 20px;">Reserved By</p>
  <input type="text" name="reservedby" placeholder="Enter Name" style=" width: 90%; position: absolute;"><br><br>
   <p style="padding-right: 20px;">Customer ID</p>
  <input type="number" name="customerID" placeholder="Enter customer ID" style=" width: 90%; position: absolute;"><br><br>
  <p style="padding-right: 20px;">Date Booked</p>
  <input type="date" name="datebooked" placeholder="Enter date" style=" width: 90%; position: absolute;"><br><br>
  <p style="padding-right: 20px;">Number of People</p>
  <input type="number" name="peoplenumber" placeholder="Enter number of people" style=" width: 90%; position: absolute;"><br><br>
  <p style="padding-right: 20px;">Table Number</p>
  <input type="number" name="tablenumber" placeholder="Enter table number" style=" width: 90%; position: absolute;"><br><br>
  <p style="padding-right: 20px;">Contact</p>
  <input type="number" name="contactnumber" placeholder="Enter contact number" style=" width: 90%; position: absolute;"><br><br><br>
  <input type="submit" name="submit" value="Submit" style=" width: 80%; position: absolute;left: 10%;" onclick="addRow('reservetable')"> <br><br>
  </form>





  </div>
</div>
      </div>
     
    </div>
  </div>
</div>



<table class="table table-bordered" id="menutable" style="position: absolute;top: 28%; left: 10%; width: 80%; background-color:#D1CDC4; opacity: .9; text-align: center; ">
  <thead>
    <tr style="font-weight: bolder; ">
      <th scope="col" style="width: 50px;">Item Code</th>
      <th scope="col" style="width: 100px;">Category</th>
      <th scope="col" style="width: 100px">Name</th>
      <th scope="col" style="width: 100px">Servings</th>
      <th scope="col" style="width: 100px">Price (Taka)</th>


    </tr>
  </thead>
  <tbody>
   <<?php

$sql = "SELECT * FROM menu;";
$result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["item_code"]. "</td><td>". $row["item_cat"]. "</td><td>". $row["item_name"]. "</td><td>".$row["item_serves"]. "</td><td>" . $row["item_price"]. "</td></tr>";
  }
   
?>
  
  </tbody>
</table>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>























