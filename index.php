<?php

include("db.php");


// fetch data from database

$sql = "SELECT * FROM image";
$result = mysqli_query($db, $sql);



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>image-gallery</title>
</head>

<body>

    <!-- navbar  --><?php require("navbar.php") ?>


    <div class="container">
        <div class="topsection">
            <h1>feel free to enjoy the images</h1>
            <p>On this website you can add your beautiful images. and other people can see and enjoy your images. Everyone can upload their images and everyone can see the images. </p>
            <h3>Please allow me to include your image here.</h3>
            <a href="add.php">add images</a>
        </div>
        <div class="images">
            <div class="box">

                <?php

                

                // checking for data in the database

                if (mysqli_num_rows($result) > 0) {

                    foreach ($result as $result) {
                ?>
                        <div class="img"><img src="<?php echo "img/" . $result['image']   ?>" alt="images">
                            <h4> photographer: <?php echo $result['name']   ?></h4>
                            <p>Title: <?php echo $result['about']   ?></p>
                            <p><?php echo $result['date']   ?></p>

                        </div>
                <?php
                    }
                } else {

                    echo "NO IMAGES UPLOADED YET";
                }


                ?>

            </div>
        </div>
    </div>





</body>

</html>