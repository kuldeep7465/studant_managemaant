

<?php
$conn=mysqli_connect("localhost","root","","studant_management");
if ($conn) {
    # code...
    echo "connection succesfull";
}
else {
    
    echo "connetion faild";
}
if (isset($_POST['submit'])) {
    $id=$_GET['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['pass'];
    $sql="UPDATE `studant` SET `id` = '$id', `name` = ' $username', `email` = '$email', `MobileNo` = '$mobile', `pass` = '$password' WHERE `studant`.`id` = $id";
    $quary=mysqli_query($conn,$sql);
    if ($quary) {
       header("location:value_print.php");
    }
    else {
        echo "not isert";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
<div class="container">
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="" id="exampleInputEmail1"
                aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" value="" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mobile No</label>
            <input type="text" name="mobile" class="form-control" value="" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control"  value="" id="exampleInputPassword1">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>