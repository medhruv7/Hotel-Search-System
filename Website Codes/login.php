<?php
session_start();
include_once("connect.php");
$eid = $_REQUEST['eid'];
$id = $_REQUEST['id'];
$email = $_POST['email'];
$password = $_POST['password'];

if(isset($_SESSION['usersession'])){
    header("Location:index.php");

}


if(isset($_POST['submit']))
{

    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    $q="select id, email,password from info where email='$email'";
    $sql= mysqli_query($conn,$q);

    $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);


    echo $count = mysqli_num_rows($sql);
    if(($password == $row['password']) && ($count>=1) && ($eid==1) ) {
        $_SESSION['usersession'] = $row['id'];

        header("Location:index.php");}
        elseif(($password == $row['password']) && ($count>=1) && ($eid==2)){
            $_SESSION['usersession'] = $row['id'];

            header("Location:book.php?id=".$id);
        }

    else {
        echo "error";
    }

    mysqli_close($conn);
}
?>

<html >

<head><title>Hotels.com</title>
    <meta name="viewport" content="width=device-width, initial scale=1.0" >
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body class="loginfull">

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


<div class="row">
    <div class="container ">
        <div class=" col-xs-12 col-lg-7  login">

            <form method="post" >

                <h2 class="login-head"> Login </h2>
                <div class="form-group">
                    <label for="email" class="glyphicon glyphicon-user"></label>
                    <input class="form-control" type="email" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="password" class="glyphicon glyphicon-asterisk" ></label>
                    <input class="form-control" type="password" id="password" placeholder="password" name="password">
                </div>
                <div class="form-group">

                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>

                </div>
                <div class="form-group">

                     <button type="submit" class="btn btn-default" name="submit">
                        <span class="glyphicon glyphicon-log-in"></span> Login
                    </button>



                    <a  href="register.php" class="btn btn-primary" >
                        <span class="glyphicon glyphicon-log-in"> </span>
                        Sign Up
                    </a>




                </div>
            </form>

        </div>

    </div>

</div>

</body>

</html>