<?php
    session_start();
    include_once ("connect.php");
    $select = "select * from hotelinfo ";
    $sql = mysqli_query($conn,$select);
    ?>

    <html>
    <head>

    </head>

    <body>

    <select>
        <?php while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)){ ?>
        <option value="<?php $row['name']; ?>"><?php echo $row['name']; ?></option>
        <?php } ?>
    </select>

    <form>
       Wifi <input type="checkbox" value="wifi" name="fac"> <br>
       Early Check-IN <input type="checkbox" value="Early Check-In" name="fac"> <br>
       Restraunts <input type="checkbox" value="Restraunts" name="fac"> <br>
       Swimming Pool <input type="checkbox" value="Swimming Pool" name="fac"> <br>
    </form>


    </body>
    </html>