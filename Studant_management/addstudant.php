<?php
$conn=mysqli_connect("localhost","root","","studant_management");
if ($conn) {
    # code...
    //secho "connection succesfull";
}
else {
    
    echo "connetion faild";
}
if (isset($_POST['submit'])) {
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['pass'];
    $sql="INSERT INTO `studant` (`name`, `email`, `MobileNo`, `pass`) VALUES ( ' $username', '$email', '$mobile', '$password')";
    $quary=mysqli_query($conn,$sql);
    if ($quary) {
        echo "insert";
    }
    else {
        echo "not insert";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }
    .image
{
    background-image:url(./l.jpg) ; 
     background-position: center;
     background-position: top;
     background-position: absolute;
     /* background-position: bottom; */
     color:back;
     width: 100%;
     height: 200px;
     padding-left:20px;
     background-size: cover;
}
.container
{
    
   padding-top:20px;
margin:200px;
font-family: 'Mohave', sans-serif;
}
    </style>
    <title>Welcome to iDiscuss - Coding Forums</title>
    
</head>

<body class="image">
    <h1 class="container my-4">
    add studant database
    </h1>
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="container-fluid my-4 ">


                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                           
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mobile No</label>
                            <input type="text" name="mobile"class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                        </div>
                       
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="card my-4" style="width: 18rem;">
                    <img src="k.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
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