<?php
if(isset($_POST['submit']))
{
    $arr=["Sana","Minahal","Eman","fiana"];
    echo $_POST['name'];
    echo $_POST['psw'];
    // if (strlen($_POST['name'])<10)
    // {
    //     echo "<br> Your name is pretty small";
    // }
    if(!in_array($_POST['name'],$arr))
    {
        echo "Not allowed";
    }
    else
    {
        echo "Welcome";
    }
}
?>
