<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Response</title>
</head>
<body>
<p>

    <?php
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $gender = $_POST["gender"];
        $mainpower = $_POST["mainpower"];
        echo $firstname . $lastname;
     echo "Thank you Mr {$firstname} {$lastname} ! We will examinate your candidature for the SHIELD";
     echo "Gender :  {$gender}<br/> Main Power : {$mainpower}";
    ?>

</p>

</body>
</html>