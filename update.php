<?php
// Updating Records
include "connection.php";
include "functions.php";
include "header.php";
if(isset($_POST['update']))
{
updateData();
}
?>
<div class="container">
<h2 class="text-center">Update</h2>
    <form action="update.php" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="username" class="form-control" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
     <select name="id" id="">
        <?php
        idDropDown();
        ?>
     </select>
    </div>
    <button type="submit" class="btn btn-default" name="update">Update</button>
    </form>
    </div>
    <?php include "footer.php"; ?>