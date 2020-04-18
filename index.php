<div id="calculatechange_form" class="modal">

  <!-- Modal content -->
  <div class="form_content">
    <span class="close2">&times;</span>

  <h1>ADD SALE</h1> <br>
  <form action="includes/sales.inc.php" id = "calculatechange_form"method="post">

    <ul>
      <li> <p style="padding-right: 20px;">Date</p></li>
      <li><input type="date" name="saledate" placeholder="Enter Date" align="right"></li> <br><br>

      <li> <p style="padding-right: 20px;"> Item Name </p></li>
      <li> <input type="text" name="saleitem" placeholder="Enter item name" align="right" ></li><br><br>
      <li><p style="padding-right: 10px; display: inline-block;">Price</p></li>
      <li>  <input type="number" id = "price" name="saleitemprice" placeholder="Item Price" align="right" style="width: 150px; display: inline-block; margin-top: 10px;"></li>

      <li><p style="padding-right: 10px; padding-left: 20px;">Quantity</p></li>
      <li><input type="number" id = "quantity"name="saleitemquantity" placeholder="Enter quantity" align="right" style="width: 150px; display: inline-block; margin-top: 10px"></li><br><br>
    

  
      <li><p style="padding-right: 10px">Check if customer is a member: </p></li>
    
      <div class="form-check" >
  <input class="form-check-input" type="checkbox" value="value1" name="cbox" id="defaultCheck1" style="position: absolute;bottom:35px; left: 18%;">
  <label class="form-check-label" for="defaultCheck1">
  
  </label>
</div>

<li><p style="padding-right: 10px; position: absolute;left: 8%; bottom: 21%">Member's ID</p></li>
      <li><input type="number" name="salememberid" placeholder="Enter Member's ID" align="right" style="position: absolute;left: 30%; bottom: 21%"></li><br><br>

  <input type="submit" name="submit" value="Create" style=" width: 80%; position: absolute;left: 10%; bottom: 7%;" onclick="addRow('membertable')"> <br><br>
  </form>

  </div>
</div>




<?php
require 'includes/dbh.inc.php';
//checks if button clicked
if(isset($_GET['edit'])) 
{

	
	require 'includes/dbh.inc.php';

	$rdate = $_POST['datemade'];
	$rby = $_POST['reservedby'];
	$rbooked = $_POST['datebooked'];
	$rpeople = $_POST['peoplenumber'];
	$rtable = $_POST['tablenumber'];	
	$rcontact = $_POST['contactnumber'];

}
?>




// Get the modal
var modal2 = document.getElementById("calculatechange_form");

// Get the button that opens the modal
var btn2 = document.getElementById("change");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks on the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}
























$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['idUsers'] . "<br>";
	}
?>


<INPUT type="button" value="Add Row" onclick="addRow('menutable')" />

  <INPUT type="button" value="Delete Row" onclick="deleteRow('menutable')" />
<SCRIPT language="javascript">
    function addRow(menutable) {

      var table = document.getElementById(menutable);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }
</SCRIPT>
<table class="table table-bordered" id="menutable" style="position: absolute;top: 28%; left: 2%; width: 95%; background-color:#FFA447; opacity: 0.8; ">
  <thead>
    <tr style="font-weight: bolder;">
      <th scope="col">Item Code</th>
      <th scope="col">Category</th>
      <th scope="col">Name</th>
      <th scope="col">Servings</th>
      <th scope="col">Price (Taka)</th>

    </tr>
  </thead>
  <tbody>
   
  </tbody>
</table>









\\\reserve


<?php
session_start();
require 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabaq Coffee</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="header.css">

</head>
<body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
