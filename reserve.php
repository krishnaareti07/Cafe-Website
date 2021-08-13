<?php
$con=mysqli_connect("localhost","root","","A5cafe") or die("error at con");
$dt=$_POST['date'];
$ti=$_POST['tim'];
$np=$_POST['np'];
$nam=$_POST['name'];
$em=$_POST['email'];
$mn=$_POST['phone'];
$test="Select date,tim from reserve where date='$dt' and tim='$ti'";
echo $test;
$re=mysqli_query($con,$test) or die("error at test");
$k=mysqli_num_rows($re);
if($k>=1)
echo ("Slot not available");
else
{
 $q="insert into reserve(date,tim,np,nam,em,mn) values('$dt','$ti','$np','$nam','$em','$mn')";
 $ex=mysqli_query($con,$q) or die("Error at reserve");
 if($ex)
  echo "Your Table Reserved on $dt at $ti ";
 else
 echo "Problem";
}
 ?> 