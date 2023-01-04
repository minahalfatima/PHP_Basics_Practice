 <?php
 include "connection.php";
 include "functions.php";
 include "header.php";
 if(isset($_POST['submit']))
 {
  enterData(); 
 }
 ?>
    <div class="container">
    <h2 class="text-center">Create</h2>
    <form action="create.php" method="post">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="username" class="form-control" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Create</button>
    </form>
    </div>
<?php include "footer.php"; ?>