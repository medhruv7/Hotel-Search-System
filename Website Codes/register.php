<?php
    include_once ("connect.php");
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $pic = $_FILES['pic']['name'];
    $date = $_POST['dob'];

    $dir_name = "upload/";

    if($_POST['register']){

        $insert = "insert into info set 
            firstname = '$fname',
            lastname = '$lname',
            username = '$username',
            password = '$password',
            email = '$email',
            pic = '$pic',
            date = '$date'
            ";

        mysqli_query($conn,$insert) or die(mysqli_error());
        move_uploaded_file($_FILES['pic']['tmp_name'],$dir_name. $_FILES['pic']['name']);

        header("Location:register.php");

    }

?>

<html>


<head><title>Hotels.com</title>

    <meta name="viewport" content="width=device-width, initial scale=1.0" >
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">


    <link rel="stylesheet" href="style.css">

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top shift">
    <div class="container-fluid">



        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#data1" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">LOGO</a>
        </div>


        <h4 class="navbar-text collapse navbar-collapse" style="margin-left: 700px"><?php if(isset($_SESSION['usersession'])){
                echo $row['username'];
            } ?></h4>



        <div class="collapse navbar-collapse" id="data1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
                <?php if(!isset($_SESSION['usersession'])){

                    echo " <li><a href='login.php?eid=' .'$id'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";}
                else {echo "";}

                ?>
                <?php if(!isset($_SESSION['usersession'])){
                    echo "<li><a href='register.php'><span class='glyphicon glyphicon-pencil'></span> SignUp</a> </li>" ;}
                else {echo "";}
                ?>
                <?php if(!isset($_SESSION['usersession'])){
                    echo "<li><a href='register.php'><span class='glyphicon glyphicon-user''></span> Profile</a> </li>" ;}
                else {
                    echo "<li><a href='user.php'><span class='glyphicon glyphicon-user''></span> Profile</a> </li>" ;
                } ?>
                <?php
                if(!isset($_SESSION['usersession'])){
                    echo "";
                }else{
                    echo "<li><a href='logout.php?logout'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";}
                ?>


                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-road"></span> Hotels</a>
                    <ul class="dropdown-menu">
                        <li><a href="premium_hotels.php"> Premium </a></li>
                        <li class="divider"></li>
                        <li><a href="#">Budget </a></li>
                        <li class="divider"></li>
                        <li><a href="#">Buisness </a></li>

                    </ul>

                </li>

                <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Contact</a> </li>
            </ul>
        </div>

    </div>

</nav> <!-- navigation bar code -->

<div class="row ">
    <div class="container-fluid">
        <div class="col-lg-6 col-lg-offset-3 signup">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">

                    <h2> SignUp Here <small> it's absolutely free</small> </h2>
                    <hr class="colorgraph">
                    <br>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-lg-6 ">
                    <label for="firstname" >FirstName : </label>
                    <input type="text" class="form-control input-lg"  placeholder="Enter your firstname" name="firstname">
                    </div>

                    <div class="col-md-6">

                    <div class="form-group">
                    <label for="lastname" >LastName : </label>
                    <input type="text"  class="form-control input-lg" placeholder="Enter your lastname" name="lastname">
                    </div>
                </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="email" >Email-ID</label>
                    <input class="form-control input-lg" type="email" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="username" >Username : </label>
                    <input type="text" class="form-control input-lg" placeholder="Username" name="username">
                </div>
                <div class="row">
                <div class="form-group">
                    <div class="col-lg-6">
                    <label for="password"  >Password</label>
                    <input class="form-control input-lg" type="password" id="password" placeholder="password" name="password">
                    </div>
                    <div class="col-lg-6">
                    <label for="passwordconfirm"  >Confirm Password</label>
                    <input class="form-control input-lg" type="password" id="passwordconfirm" placeholder="password" name="passwordconfirm">
                    </div>
                </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="dob" >Date Of Birth :</label>
                <input type="date" class="form-control input-lg" name="dob">
                </div>
                <div class="form-group">
                    <label for="pic">Profile Pic</label>
                    <input type="file" class="form-control form-lg" name="pic">
                </div>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" name="register" ></div>
                    <div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                </div>
            </form>

        </div>
    </div>

</div>





<script
    src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>