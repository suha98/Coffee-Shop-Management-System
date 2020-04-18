<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="position: absolute;top: 20%; left: 20%; font-family:serif; border:none; outline: none; height: 35px; background-color:#110B0D; opacity: 0.8; color:#FFF; font-size: 16px; border-radius:0px">
  Update Item
</button>


<div id="updatemember_form" style="background-color: #110B0D"  >

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class ="modal-content" style="background-color: transparent; border: none;">
     
      <div class="modal-body" id="updatemember_form">
        


  <!-- Modal content -->
  <div class="form_content" id="updatemember_form" style="background-color: #D2D8D4; width:600px; height: 540px;">

  <h1>UPDATE INFORMATION</h1> <br>




  <form action="update.member.php" method="post" id="updatemember_form">

    <ul style=" list-style-type: none;
display: inline-block;">
      <li> <p style="padding-right: 20px;   float: left;">Member Name</p></li>
      <li><input style = " float: right;" type="text" name="membername" placeholder="Enter Member's name" align="right"></li> <br><br>

      <li> <p style=" float: left;padding-right: 40px;"> Date Joined</p></li>
      <li> <input style = " float: right;"type="Date" name="datejoined" placeholder="Date Joined" align="right"></li><br><br>
      <li><p style="  float: left;padding-right: 10px;">Contact Number</p></li>
      <li>  <input style = " float: right;" type="number" name="contact" placeholder="Enter contact number" align="right"></li><br><br>
      <li><p style="  float: left;padding-right: 80px;">Email</p></li>
      <li><input style = " float: right;" type="text" name="email" placeholder="Enter email" align="right"></li><br><br>
      <li><p style="  float: left;padding-right: 80px">Points</p></li>
      <li><input style = " float: right;" type="number" name="pointnumber" placeholder="Enter number of points" align="right"></li><br>
    </ul>
  <input type="submit" name="submit" value="Create" style=" width: 80%; position: absolute; top: 90%; left: 10%" onclick="addRow('membertable')"> <br><br>
  </form>




  </div>
</div>



      </div>
    </div>
  </div>
</div>
