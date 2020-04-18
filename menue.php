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
    <link rel="stylesheet" type="text/css" href="menu.css">
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


<div class="create_b">
  <button id="add_item" >Add Item</button>
</div>



 
<table class="table table-bordered" id="menutable" style="position: absolute;top: 28%; left: 10%; width: 80%; background-color:#FFA447; opacity: .9; text-align: center; ">
  <thead>
    <tr style="font-weight: bolder; ">
      <th scope="col" style="width: 50px;">Item Code</th>
      <th scope="col" style="width: 100px;">Category</th>
      <th scope="col" style="width: 100px">Name</th>
      <th scope="col" style="width: 100px">Servings</th>
      <th scope="col" style="width: 100px">Price (Taka)</th>
            <th scope="col" style="width: 100px">Updated By</th>

<th scope="col" style="width: 50px">Delete?</th>

    </tr>
  </thead>
  <tbody>
   <<?php

$sql = "SELECT * FROM menu;";
$result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["item_code"]. "</td><td>". $row["item_cat"]. "</td><td>". $row["item_name"]. "</td><td>".$row["item_serves"]. "</td><td>" . $row["item_price"]. "</td><td>".$row["updated_by"]."</td><td><a href=includes/delete.inc.php?id=" .$row["item_code"]."> Delete </a></td></tr>";
  }
   
?>
  
  </tbody>
</table>




<!-- The Modal -->
<div id="additem_form" class="modal" style="width: 370px; height: 500px; background-color: #FFA447; opacity: 0.8;
  box-sizing: border-box; font-weight: bold;
  font-family: serif; top: 23%; left: 37%; padding: 15px;" >

  <!-- Modal content -->
  <div class="form_content">
    <span class="close">&times;</span>

  <h1>ADD ITEM</h1> <br>




  <form action="includes/menu.inc.php" method="post">
    <p>Item Category</p>
<input type="text" name="itemcat" placeholder="Enter Category"style="width: 100%; margin-bottom:10px">

  <p> Item Name</p>
  <input type="text" name="itemname" placeholder="Enter Item Name"style="width: 100%; margin-bottom:10px">
  <p style="margin-bottom: 10px">Number of Servings</p>
  <input type="number" name="itemserving" placeholder="Enter number of servings"style="width: 100%; margin-bottom:10px">
  <p style="margin-bottom: 10px;">Price</p>
  <input type="number" name="itemprice" placeholder="Enter price"style="width: 100%; margin-bottom:10px">
  <p> Updated By</p>
  <input type="text" name="update" placeholder="Enter Employee ID"style="width: 100%; margin-bottom:10px">
  <input type="submit" name="submit" value="Create" onclick="addRow('menutable')" style="width: 100%; margin-bottom:10px; background-color: silver"> <br><br>
  </form>




  </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="position: absolute;top: 20%; left: 20%; font-family:serif; border:none; outline: none; height: 35px; background-color:#110B0D; opacity: 0.8; color:#FFF; font-size: 16px; border-radius:0px">
  Update Item
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class ="modal-content" style="background-color: transparent; border: none;">
     
      <div class="modal-body" style="position: absolute; left: 50%; top: 50%;">
        

<div id="updateitem_form" style="width: 370px; height: 590px; background-color: #FFA447; opacity: 0.8;
  box-sizing: border-box; font-weight: bold;
  font-family: serif; padding: 20px;"  >

  <!-- Modal content -->
  <div class="form_content">

  <h1>UPDATE ITEM</h1> <br>




  <form action="update.menu.php" method="post">
     <p>Item ID</p>
<input type="number" name="itemid" placeholder="Enter id" style="width: 100%; margin-bottom:10px">
    <p>Item Category</p>

  
<input type="text" name="itemcat" placeholder="Enter Category" style="width: 100%; margin-bottom:10px" />

  <p> Item Name</p>
  <input type="text" name="itemname" placeholder="Enter Item Name" style="width: 100%; margin-bottom:10px">
  <p>Number of Servings</p>
  <input type="number" name="itemserving" placeholder="Enter number of servings" style="width: 100%; margin-bottom:10px">
  <p>Price</p>
  <input type="number" name="itemprice" placeholder="Enter price" style="width: 100%; margin-bottom: 20px; "> 
 <p> Updated By</p>
  <input type="text" name="update" placeholder="Enter Employee ID"style="width: 100%; margin-bottom:10px">
  <input type="submit" name="create" value="Update" style="width: 100%; border-radius: 20px; background-color: silver;"> <br><br>
  </form>




  </div>
</div>



      </div>
    </div>
  </div>
</div>


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























