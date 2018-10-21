<?php
session_start();
include_once ("connect.php");
$sql = mysqli_query($conn,"select * from info where id = ".$_SESSION['usersession']);
$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
$id = '1';
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
    <div class="container-fluid">

    <nav class="navbar navbar-inverse navbar-fixed-top shift" style="width: 100%;background: rgba(42,42,42,0.6);z-index: 9999;height: inherit">
        <div class="container-fluid"  >



            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#data1" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: white">LOGO</a>
            </div>


            <h4 class="navbar-text collapse navbar-collapse" style="margin-left: 700px"><?php if(isset($_SESSION['usersession'])){
                    echo $row['username'];
                } ?></h4>



            <div class="collapse navbar-collapse" id="data1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" style="color: white"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
                    <?php if(!isset($_SESSION['usersession'])){

                    echo " <li><a href='login.php?eid=1' style=\"color: white\"><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";}
                    else {echo "";}

                    ?>
                    <?php if(!isset($_SESSION['usersession'])){
                    echo "<li><a href='register.php' style='color: white'><span class='glyphicon glyphicon-pencil'></span> SignUp</a> </li>" ;}
                    else {echo "";}
                    ?>
                    <?php if(!isset($_SESSION['usersession'])){
                    echo "<li><a href='register.php' style=\"color: white\"><span class='glyphicon glyphicon-user''></span> Profile</a> </li>" ;}
                    else {
                        echo "<li><a href='user.php' style=\"color: white\"><span class='glyphicon glyphicon-user''></span> Profile</a> </li>" ;
                    } ?>
                    <?php
                    if(!isset($_SESSION['usersession'])){
                        echo "";
                    }else{
                    echo "<li><a href='logout.php?logout' style=\"color: white\"><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";}
                        ?>


                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white"><span class="glyphicon glyphicon-road"></span> Hotels <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="premium_hotels.php"> Premium </a></li>
                            <li class="divider"></li>
                            <li><a href="#">Budget </a></li>
                            <li class="divider"></li>
                            <li><a href="#">Buisness </a></li>

                        </ul>

                    </li>

                    <li><a href="#" style="color: white"><span class="glyphicon glyphicon-info-sign"></span> Contact</a> </li>
                </ul>
            </div>

        </div>

    </nav> <!-- navigation bar code -->

            <div class="row slidearea ">

                <div class="col-lg-12 " >

                       <div class="carousel slide" id="myslider" data-ride="carousel" >
                        <ol class="carousel-indicators">
                            <li data-target="#myslider" data-slide-to="0" class="active"></li>
                            <li data-target="#myslider" data-slide-to="1" ></li>
                            <li data-target="#myslider" data-slide-to="2" ></li>
                            <li data-target="#myslider" data-slide-to="3" ></li>
                        </ol>

                           <div class="carousel-inner">
                               <div class="item active">
                                   <img src="a.jpg" >
                                   <div class="carousel-caption">
                                       <h2> Hotels </h2>
                                   </div>

                               </div>
                               <div class="item">
                                   <img src="b.jpg" >
                                   <div class="carousel-caption">
                                       <h2> Hotels </h2>
                                   </div>

                               </div>
                               <div class="item">
                                   <img src="c.jpg" >
                                   <div class="carousel-caption">
                                       <h2> Hotels </h2>
                                   </div>

                               </div>
                               <div class="item">
                                   <img src="h.jpg" >
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
            <div class="area2" style="background-color: rgba(214,193,113,0.7);  width: inherit;">
            <div class="filler1" >
                <h1 style="text-align: center;font-family: sans-serif ;font-weight: bold;">Choose From Range Of Hotels</h1>
            </div>

            <div class="container-fluid cardarea">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="card-deck" >
                        <div class="card">
                            <a href="premium_hotels.php" style="text-decoration: none;color: #0f0f0f">
                            <img src="d.jpg" class="card-img-top ">

                            <div class="card-block">
                                <h3 class="card-title">Premium Hotels</h3>
                             <p>Choose from the executive range of our hotels</p>
                            </div>
                            </a>

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
            </div>

            <div class="row">

            <div class="container-fluid" style="margin-top: 100px; background-color: white;height: 1000px; width: 90%;">
                <h1 style="text-align: center; margin-bottom: 50px;font-size: 50px">Join Us <br></h1>



             <div class="col-lg-4 col-lg-offset-1" style="background: rgba(77,152,230,0.3); height: 800px">
                 <form method="post">
                     <h1 class="form-group" >Login</h1>
                     <hr class="colorgraph">
                     <div class="form-group">
                         <label for="email" style="margin-top: 40px" >Email-ID</label>
                         <input class="form-control input-lg" type="email" id="email" placeholder="Email" name="email"  required>
                     </div>
                     <div class="form-group">
                         <label for="password" style="margin-top: 40px" >Password</label>
                         <input class="form-control input-lg" type="password" id="password" placeholder="Password" name="password" required>
                     </div>
                     <div class="form-group" style="text-align: center">
                         <input type="submit" class="btn btn-primary " name="submit" value="Submit" style="width: 200px; height: 50px; margin-top: 60px">
                     </div>

                 </form>
             </div>

                    <div class="col-lg-1 " style="border-right: solid 1px black; height: 800px">

                    </div>

                        <div class="col-lg-4 col-lg-offset-1" style="background-color: rgba(41,230,75,0.3);height: 800px">
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
                <div style="border: solid 1px black">

                </div>

                <div class="container-fluid" style="margin-top: 100px">
                    <div class="col-lg-3">
                        <section>
                            <h3>
                                Information
                            </h3>

                        </section>

                </div>
            </div>




    </div>



            <script>
                $(document).on("scroll",function(){
                    if($(document).scrollTop()>500)
                    {
                        $( ".navbar" ).animate({height: 50} ,{duration:100});
                    }
                    else if($(document).scrollTop()==0)
                    {
                        alert("dhsihsp");
                        $( ".navbar" ).animate({height: 100} ,{duration:100});
                    }
                });
            </script>


            <script
                src="https://code.jquery.com/jquery-1.12.4.min.js"
                integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
                crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>

</html>