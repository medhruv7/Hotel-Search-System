<?php
    session_start();
    include_once ("connect.php");
    $name = $_POST['name'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $status = $_POST['status'];
    $wifi = $_POST['wifi'];
    $restraunt = $_POST['restraunt'];
    $parking = $_POST['parking'];
    $pic = $_FILES['pic']['name'];
    $dir_name = "uploadhotel/";

    if($_POST['submit']){
        $insert = "INSERT into hotelinfo set name= '$name', price= '$price', location ='$location', status= '$status', wifi= '$wifi', restraunt = '$restraunt', parking = '$parking', pic = '$pic' ";
        $sql = mysqli_query($conn,$insert);
        move_uploaded_file($_FILES['pic']['tmp_name'],$dir_name.$_FILES['pic']['name']);

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
    <div class="container-fluid">
    <div class="col-lg-10">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            Name Of the Hotel:
            <input type="text" class="input-lg" name="name">

        </div>
        <div class="form-group">
        Price Of the Hotel :
        <input type="number" class="input-lg" name="price">
        </div>

        <div class="form-group">
            Location Of the Hotel :
            <input type="text" class="input-lg" name="location">
        </div>

        <div class="form-group">
            Status
            <select class="input-lg" name="status">
                <option value="Available">Available</option>
                <option value="UnAvailable">UnAvailable</option>
            </select>
        </div>

        <div class="form-group">
            wifi
            <input type="checkbox" value="wifi" name="wifi">
        </div>
        <div class="form-group">
            Restraunt
            <input type="checkbox" value="Restraunt" name="restraunt">
        </div>
        <div class="form-group">
            Parking
            <input type="checkbox" value="Parking" name="parking">
        </div>
        <div class="form-group">
            <input type="file" name="pic" class="input-lg">
        </div>
        <div class="form-group">
            <input type="submit" class="input-lg btn btn-success" name="submit" >
        </div>

    </form>

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