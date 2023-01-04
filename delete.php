<?php
// Updating Records
include "connection.php";
include "functions.php";
include "header.php";

if(isset($_POST['delete']))
{
deleteData();
}
?>
    <div class="container">
    <h2 class="text-center">Delete</h2>
    <form action="delete.php" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="username" class="form-control" placeholder="Enter username" name="username">
    </div>
    <button type="submit" class="btn btn-default" name="delete">Delete</button>
    </form>
    </div>
<?php    include "footer.php"; ?>