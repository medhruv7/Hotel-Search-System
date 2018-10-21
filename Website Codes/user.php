<?php
session_start();
include_once ("connect.php");
if(!isset($_SESSION['usersession']))
{
    header("Location:index.php");
}

$sql = mysqli_query($conn,"select * from info where id = " .$_SESSION['usersession']);
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

        <div class="collapse navbar-collapse" id="data1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
                <li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Profile</a> </li>

                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-road"></span> Hotels</a>
                    <ul class="dropdown-menu">
                        <li><a href="premium_hotels.php"> Premium </a></li>
                        <li class="divider"></li>
                        <li><a href="#">Budget </a></li>
                        <li class="divider"></li>
                        <li><a href="#">Buisness </a></li>

                    </ul>

                </li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a> </li>

                <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Contact</a> </li>
            </ul>
        </div>

    </div>

</nav> <!-- navigation bar code -->
    <div class="container">
        <div class="panel panel-success" style="margin-top: 100px">
            <div class="panel-heading"><h1 style="text-align: center"> User Info  </h1></div>
            <div class="panel-body">
              <!-- Pending  <img src="e.jpg">   -->
                <ul class="list-group">
                    <li class="list-group-item">Firstname : <?php echo $row['firstname']; ?></li>
                    <li class="list-group-item">Lastname :  <?php echo $row['lastname']; ?></li>
                    <li class="list-group-item">username :  <?php echo $row['username']; ?></li>
                    <li class="list-group-item">password : <?php echo $row['password']; ?></li>
                    <li class="list-group-item">email : <?php echo $row['email']; ?></li>
                    <li class="list-group-item">Date Of Birth : <?php echo $row['date']; ?></li>

                </ul>

            </div>
        </div>
    </div>

<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
