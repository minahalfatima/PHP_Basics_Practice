<!-- If cookies are set in a browser and cookies are saving personal prefrences then how come YT give same recommendations when logged into another device -->
<?php
// Writing cookies
$name="Name";
$value="books";
$time=time()+(2*24*60*60);
setcookie($name,$value,$time);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // reading cookies
 if(isset($_COOKIE['Name']))
 {
   echo $_COOKIE['Name'];
 }
 else
 {

 }
    ?>
   
</body>
</html>