<?php
session_start();
include_once("connect.php");
if(!isset($_SESSION['usersession']))
{
    header("Location:index.php");
}

$sql = mysqli_query($conn,"select * from info where id=" .$_SESSION['usersession']);
$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);

mysqli_close($conn);


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


            <h4 class="navbar-text collapse navbar-collapse" style="margin-left: 700px">Welcome <?php echo $row['username']; ?></h4>


        <div class="collapse navbar-collapse" id="data1">
            <ul class="nav navbar-nav navbar-right">


                <li><a href="profile.php"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
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
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a> </li>
                <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Contact</a> </li>
            </ul>
        </div>

    </div>

</nav> <!-- navigation bar code -->

<div class="row slidearea">

    <div class="col-lg-10 col-lg-offset-1">

        <div class="carousel slide" id="myslider" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myslider" data-slide-to="0" class="active"></li>
                <li data-target="#myslider" data-slide-to="1" ></li>
                <li data-target="#myslider" data-slide-to="2" ></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="a.jpg">
                    <div class="carousel-caption">
                        <h2> Hotels </h2>
                    </div>

                </div>
                <div class="item">
                    <img src="b.jpg">
                    <div class="carousel-caption">
                        <h2> Hotels </h2>
                    </div>

                </div>
                <div class="item">
                    <img src="c.jpg">
                    <div class="carousel-caption">
                        <h2> Hotels </h2>
                    </div>

                </div>

            </div>

            <a class="right carousel-control" href="#myslider" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <a class="left carousel-control" href="#myslider" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>


        </div>


    </div>






</div>



<div class="container-fluid cardarea">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="card-deck">
                <div class="card">
                    <img src="d.jpg" class="card-img-top ">

                    <div class="card-block">
                        <h3 class="card-title">Premium Hotels</h3>
                        <p>Choose from the executive range of our hotels</p>
                    </div>

                </div>


                <div class="card">
                    <img src="e.jpg" class="card-img-top ">

                    <div class="card-block">
                        <h3 class="card-title">Budget Hotels</h3>
                        <p>Choose from the budget range of our hotels</p>
                    </div>
                </div>

                <div class="card">
                    <img src="f.jpg" class="card-img-top ">

                    <div class="card-block">
                        <h3 class="card-title">Buisness Hotels</h3>
                        <p>Choose from the budget range of our hotels</p>
                    </div>
                </div>
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