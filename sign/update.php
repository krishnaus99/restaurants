<?php
include 'connection.php';
$hname=$_POST["hname"];
$uname=$_POST["uname"];
$adds=$_POST["add"];
$citys=$_POST["city"];
$ctrys=$_POST["ctry"];
$zip=$_POST["zip"];

$upd=mysqli_query($con,"UPDATE merchants SET Hname='$hname',address='$adds',city='$citys',country='$ctrys',zip='$zip' WHERE Username='$uname'");
if($upd>0)
{
header("location:merchant.php");
}
?>