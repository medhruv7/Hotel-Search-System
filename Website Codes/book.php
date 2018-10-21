<?php
session_start();
include_once ("connect.php");
$id = $_REQUEST['id'];

$select = "select * from bookinginfo where id = '$id'";
$sql = mysqli_query($conn,$select);
$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
?>

<html>
<head>
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

<div class="container-fluid" style="margin-top: 100px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Booking Information
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Name Of The Hotel</th>
                        <th>Price Of The Hotel</th>
                        <th>Location Of The Hotel</th>
                        <th>Check-In Date</th>
                        <th>Check-Out Date</th>
                    </tr>

                    <tr>
                        <td><?php echo $row['name']; ?> </td>
                        <td><?php echo $row['price']; ?> </td>
                        <td><?php echo $row['location']; ?> </td>
                        <td><?php echo $row['checkin']; ?> </td>
                        <td><?php echo $row['checkout']; ?> </td>

                    </tr>
                </table>
            </div>

        </div>
    </div>
</body>
</html>
