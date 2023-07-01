<?php
include 'connection.php';

   $hname=$_POST["hname"];
   $usr=$_POST["uname"];
   $passw=$_POST["pass"];
   $filen=$_FILES["fname"]["name"];
     if(move_uploaded_file($_FILES["fname"]["tmp_name"],getcwd()."\\admin/hotel\\$filen"))
  $addr=$_POST["add"];
   $city=$_POST["city"];
   $cy=$_POST["ctry"];
   $zcode=$_POST["zip"];
$ins=mysqli_query($con,"INSERT INTO merchants VALUES('','$hname','$usr','$passw','$filen','$addr','$city','$cy','$zcode',0)");
if($ins>0)
{
header("location:forms-elements.php");
}
else
{
  echo "fail";
}


?>