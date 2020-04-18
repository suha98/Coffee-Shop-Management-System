<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

<div id="updateitem_form">

  <!-- Modal content -->
  <div class="form_content">
  <img src="https://scontent.fdac26-1.fna.fbcdn.net/v/t1.0-9/11136639_645863348879680_4941413044529644046_n.jpg?_nc_cat=107&_nc_oc=AQkNcciRkyyW9gI6lmEQx7tk2NACpei-3PYIkIptEFnDMX8m8FMcHcZWTbjXnzVx_5g&_nc_ht=scontent.fdac26-1.fna&oh=5816fa2aca4c49b77f9f83793a0bef96&oe=5E05C99B" class="logo">
  <h1>ADD ITEM</h1> <br>




  <form action="includes/menu.inc.php" method="post">
     <p>Item ID</p>
<input type="number" name="itemid" placeholder="Enter id">
    <p>Item Category</p>
    <?php
//checks if button clicked
if(isset($_POST['search'])) 
{

  
  require 'dbh.inc.php';

  $id = $_POST['itemid'];
$sql = "SELECT * FROM menu WHERE item_code=$id";
mysqli_query($conn, $sql);
$icat = mysqli_fetch_array($item_cat);
$iname = mysqli_fetch_array($item_name);
$iserves = mysqli_fetch_array($item_serves);
$iprice = mysqli_fetch_array($item_price);
}
?>
<input type="text" name="itemcat" value = "<?php echo "$icat";?>">

  <p> Item Name</p>
  <input type="text" name="itemname" placeholder="Enter Item Name">
  <p>Number of Servings</p>
  <input type="number" name="itemserving" placeholder="Enter number of servings">
  <p>Price</p>
  <input type="number" name="itemprice" placeholder="Enter price">
   <input type="submit" name="search" value="search" >
  <input type="submit" name="submit" value="Create" onclick="addRow('menutable')"> <br><br>
  </form>




  </div>
</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


