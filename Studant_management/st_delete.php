<?php
$id="";
$conn=mysqli_connect("localhost","root","","studant_management");
if ($conn) {
    # code...
    echo "connection succecessfull<br>";
}
else{
    echo "connection fiald";
}

$id=$_GET['id'];
$sql="DELETE FROM `studant` WHERE `studant`.`id` = $id";
  $quary=mysqli_query($conn,$sql);
  if ($quary) {
      # code...
      echo "data delete";
  }
  else {
      # code...
      echo "data not delete";
  }
    
header("location:value_print.php");
  

?>