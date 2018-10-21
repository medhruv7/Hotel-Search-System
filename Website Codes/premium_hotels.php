<?php
    include_once ("connect.php");
    $dirname="uploadhotel/";
    session_start();
    $sql = "select * from hotelinfo ";
    $query = mysqli_query($conn,$sql);

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

<h1 class="page-header" style="margin-top: 100px; text-align: center">
    Premium Hotels
</h1>

<div class="container-fluid cardarea">

        <div class="col-lg-12 ">
            <?php while( $row = mysqli_fetch_array($query,MYSQLI_ASSOC)){  ?>
                <div class="col-lg-4" style="margin-bottom: 30px;">
                <div class="card">
                    <a href="premium_hotel_a.php?eid=<?php echo $row['id']; ?>" style="text-decoration: none;color: #0f0f0f">
                        <img src="<?php echo $dirname.$row['pic']; ?>" class="card-img-top">
                        <div class="card-block">
                            <h3 class="card-title">&#8377 <?php echo $row['price']; ?></h3>
                            <?php echo $row['name']; ?>
                        </div>
                    </a>
                </div>
                </div>
            <?php } ?>
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