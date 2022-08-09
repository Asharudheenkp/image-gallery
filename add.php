<?php

require("db.php"); // database connetion




// form validation


$input = [];
$errors = [];


if (isset($_POST['submit'])) {


    // image validation


    $image = $_FILES['image']['name'];
   

    if ($image === "") {
        $errors['image'] = "please select an image";
    }



    // name validation

    $name = $_POST['name'];
    $input['name'] = $name;

    if ($name === "") {
        $errors['name'] = "please enter your name";
    }

    if (!preg_match("/^[a-zA-z ]*$/", $name)) {
        $errors['name'] = "Only alphabets and whitespace are allowed.";
    }

    if (strlen($name) > 20) {
        $errors['name'] = "only 20 letters allowed";
    }



    // image title validation

    $about = $_POST['about'];
    $input['about'] = $about;

    if ($about === "") {
        $errors['about'] = "please give a title to your image";
    }

    if (!preg_match("/^[a-z A-Z]*$/", $about)) {
        $errors['about'] = "Only alphabets and whitespace are allowed";
    }

    if (strlen($about) > 15) {
        $errors['about'] = "only 15 letters allowed";
    }






    // data uplaoding 

    if (empty($errors)) {


        $sql = "INSERT INTO image" . "(image,name, about)" . "VALUES " . "('$image','$name','$about')";

        mysqli_query($db, $sql);

        move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $image);

        header("Location:index.php");
    }
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css">
    <title>image-gallery</title>
</head>

<body>

    <?php require("navbar.php") ?>
    <!-- navbar -->

    <div class="container">
        <div class="box">
            <h1>showcase your images</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="sbox">
                    <label>upload your image here:</label>
                    <input type="file" name="image" >
                </div>
                <p><?php echo $errors['image'] ?? '' ?></p>


                <div class="sbox">
                    <label>your name</label>
                    <input type="text" name="name" value="<?php echo $input['name'] ?? '' ?>">

                </div>
                <p><?php echo $errors['name'] ?? '' ?></p>


                <div class="sbox">
                    <label>title for your image</label>
                    <input type="text" name="about" value="<?php echo $input['about'] ?? '' ?>">

                </div>
                <p><?php echo $errors['about'] ?? ''  ?></p>


                <input type="submit" name="submit">
            </form>
        </div>
    </div>

</body>

</html>