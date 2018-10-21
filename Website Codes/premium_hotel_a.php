<?php
session_start();
include_once ("connect.php");
$eid = $_REQUEST['eid'];
$q = "select * from hotelinfo where id = '$eid'";
$dirname = "uploadhotel/";
$sql = mysqli_query($conn,$q);
$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
$name = $row['name'];
$location = $row['location'];
$price = $row['price'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

if($_POST['submit']){

    $insert = "insert into bookinginfo set name = '$name', location = '$location', price = '$price', checkin = '$checkin' ,checkout = '$checkout'";
    mysqli_query($conn,$insert);
if (mysqli_query($conn, $insert)) {
    $last_id = mysqli_insert_id($conn);
}
    if(!isset($_SESSION['usersession'])){

    header("Location:login.php?eid=2&id=". $last_id);
    }
    else{
    header("Location:book.php?eid=". $last_id );
    }
}

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
   Hotel <?php echo $row['name']; ?>
</h1>

<div class="container-fluid" style="margin-top: 100px;">
    <div class="col-lg-8 col-lg-offset-2">
    <img src="<?php echo $dirname.$row['pic']; ?>">
    </div>
</div>


<div class="container-fluid" style="margin-top: 50px;">
    <div class="panel-primary" style="border: 1px solid">
        <h3 class="panel-heading" style="text-align: center;">Hotel Info </h3>
    <div class=" panel-body">
        <div class="col-lg-2 col-xs-12 col-sm-4" >
        <h4 > Amenities Provided</h4>
        <ul class="text-muted" style="list-style: none;">
            <li><span class="glyphicon glyphicon-signal"></span> <?php echo $row['wifi'] ?></li>
            <li><span class="glyphicon glyphicon-road"></span> <?php echo $row['parking'] ?></li>
            <li><span class="glyphicon glyphicon-glass"></span> <?php echo $row['restraunt'] ?></li>

        </ul>
        </div>
        <div class="col-lg-1 col-xs-12 col-sm-4">
            <h4 style="text-align: center">Price</h4>
            <p style="text-align: center"> &#8377 <?php echo $row['price']; ?> </p>
        </div>

        <div class="col-lg-2 col-xs-12 col-sm-4">
            <h4 style="text-align: center">Location</h4>
            <p style="text-align: center">  <?php echo $row['location']; ?> </p>
        </div>
        <div class="col-lg-7 col-xs-12 col-sm-12">
            <form method="post">
        <div class="col-lg-4">

                <div class="form-group">
                    Check-In
                    <input type="date" class="input-lg" name="checkin">
                </div>


        </div>

        <div class="col-lg-4">

                <div class="form-group">
                    Check-Out
                    <input type="date" class="input-lg" name="checkout">
                </div>


        </div>
                <div class="col-lg-4">

                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-lg" value="Book" name="submit">
                    </div>


                </div>


        </form>
        </div>




    </>
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