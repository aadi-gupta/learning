<?php
$con = mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
    echo 'Not connected to Server';
}

if(!mysqli_select_db($con,'codeigniter'))
{
    echo  'Datbase not selected';
}
$name = $_POST('name');
$number = $_POST('number');
$email = $_POST('email');
$password = $_POST('psw');

if(!mysqli_query($con,$sql))
{
    echo  'Not Inserted';
} else{
    echo "Inserted";
}
header("refresh:2, url=index.html");
?>