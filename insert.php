<?php 

include "config.php";

$nm = $_REQUEST['nm'];
$em = $_REQUEST['em'];
$ps = md5($_REQUEST['ps']);
$rps = md5($_REQUEST['rps']);

if($ps===$rps)
{
    $sql = "insert into data (name,email,pwd) values('$nm','$em','$ps')";
    $res = mysqli_query($con,$sql);
    if($res)
    {
        header("location:login.php");
    }
    else{
    echo "<script>alert('something went wrong');</script>";

    }
}
else
{
    echo "<script>alert('password not metch');</script>";
    header("location:regform.php");
}
echo "<pre>";

?>