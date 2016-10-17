<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Response</title>
</head>
<body>
<p>

    <?php
        // include database
        include ("db_connect.php");
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $gender = $_POST["gender"];
        $mainpower = $_POST["mainpower"];

         echo "Thank you Mr {$firstname} {$lastname} ! We will examinate your candidature for the SHIELD";
         echo "Gender :  {$gender}<br/> Main Power : {$mainpower}";
        $sql="INSERT INTO superheros (firstName, lastName, mainSuperPower) VALUES ('$firstname','$lastname','$mainpower')";
        if (mysqli_query($db,$sql)){
        }else{
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
        }
        // close connection to database
        $db->close();
        header("location:showSuperheros.php");
    ?>

</p>

</body>
</html>