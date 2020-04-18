<?php
//checks if button clicked

if(isset($_POST['create'])) 
{

  
  require 'includes/dbh.inc.php';
  $id = $_POST['itemid'];
  $icat = $_POST['itemcat'];
  $iname = $_POST['itemname'];
  $iserving = $_POST['itemserving'];
  $iprice = $_POST['itemprice'];


//error handlers

  if(!empty($icat) )
  {

    $sql = "UPDATE menu SET item_cat = '$icat' WHERE item_code = $id";
          mysqli_query($conn, $sql);
            header("Location: menu.php?insertion=success!"); ///// go to home page
          
        }
         if(!empty($iname) )
  {
       $sql = "UPDATE menu SET item_name = '$iname' WHERE item_code = $id";
          mysqli_query($conn, $sql);
            header("Location: menu.php?insertion=success!"); ///// go to home page
            
          
        }
         if(!empty($iprice) )
  {
        $sql = "UPDATE menu SET item_price = '$iprice' WHERE item_code = $id";
          mysqli_query($conn, $sql);
            header("Location: menu.php?insertion=success!"); ///// go to home page
          
        }
         if(!empty($iserving) )
  {
         $sql = "UPDATE menu SET item_serves = '$iserving' WHERE item_code = $id";
          mysqli_query($conn, $sql);
            header("Location: menu.php?insertion=success!"); ///// go to home page
          
        }
        if(empty($icat) && empty($iprice) && empty($iname) && empty($iserving) )
  {
    header("Location: menu.php?insertion=success!"); ///// go to home page
          }
           if(empty($id) )
  {
    header("Location: menu.php?error"); ///// go to home page
          }

exit();
}

?>