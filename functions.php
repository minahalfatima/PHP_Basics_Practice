<?php
include "connection.php";
function idDropDown()
{
    global $connection;
    $query="Select * from users";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
        echo "Failed".mysqli_error();
    }
    while($row=mysqli_fetch_row($result))
    {
        $id=$row[0];//$row['id']
        echo "<option value='$id'>$id</option>";
            
    }
}
function updateData()
{
    global $connection;
    $username=$_POST['username'];
    $password=$_POST['pwd'];
    $id=$_POST['id'];
    $query="Update users SET username='$username',password='$password' where id=$id";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
        echo "Failed".mysqli_error();
    }
}
function readData()
{
    global $connection;
    $query="Select * from users";
    $result=mysqli_query($connection,$query);
    if($result)
    {
     echo "<h2 class='text-center'>Reading Data</h2>";
    }
    while($row=mysqli_fetch_row($result))
    {
     echo "<pre>";
     echo "<br>";
     print_r($row);
     echo "</pre>";
    }
}
function enterData()
{
    global $connection;
    $username=mysqli_real_escape_string($connection,$_POST['username']);// It allows escape characters to be entered as it's because otherwise fear of SQL injection
    $password=mysqli_real_escape_string($connection,$_POST['pwd']);
    $password=crypt($password,'$5$rounds=5000$usesomesillystringforsalt$');//SHA-256 crypt algorithm
    $query="INSERT into users(username,password) VALUES('$username',' $password')";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
        echo "Failed".mysqli_error();
    }
}
function deleteData()
{
    global $connection;
    $username=$_POST['username'];
    $query="DELETE from users where username='$username'";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
        echo "Failed".mysqli_error();
    }
}
?>