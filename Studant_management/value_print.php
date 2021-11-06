<?php
$conn=mysqli_connect("localhost","root","","studant_management");
if ($conn) {
    # code...
    echo "connection succesfull";
}
else {
    
    echo "connetion faild";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type ="text/css" href ="h.css">
    <title>Studant_Managemant</title>
    <style>
   
    .image
{
    background-image:url(./l.jpg) ; 
     background-position: center;
     background-position: top;
     background-position: absolute;
     /* background-position: bottom; */
     color:black;
     width: 100%;
     height: 200px;
     padding-left:20px;
     background-size: cover;
}

    </style>
</head>
<body class="image">
 <table class="table table-bordered table-primary" id="example">
 <thead>
    <tr>
    <th scope="col">id</th>
    <th scope="col">name</th>
    
    <th scope="col">email</th>
    <th scope="col">phone</th>
    <th scope="col">pass</th>
    <th scope="col">DELETE</th>
    <th scope="col">EDIT</th>
   
    </tr>
    </thead>
    <tbody>
    <?php

    
    $sql="SELECT * FROM `studant`";
$quarey=mysqli_query($conn,$sql);
$result=mysqli_num_rows($quarey);
echo $result;
while ($result=mysqli_fetch_assoc($quarey)) {
    # code...
    echo "<tr>
   
    <th scope='row'>".$result['id']."</th>
    <td scope='row'>".$result['name']."</td>
   
    <td scope='row'>".$result['email']."</td>
    <td scope='row'>".$result['MobileNo']."</td>
 
    <td scope='row'>".$result['pass']."</td>
    <td >
    <a href='st_delete.php?id=$result[id]' onclick='return checkdelete()'>DELETE</a>
    </td>
    <td >
    <a href='update.php?id=$result[id] ' onclick='return checkdelete()'>EDIT</a>
    </td>
    </tr>";
    
}

?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script> 
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</tbody>
</table>
</body>
</html>