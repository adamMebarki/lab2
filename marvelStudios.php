<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>List of films from Marvel Studios</title>
    </head>
    <body>
        <h1>FILMS FROM MARVEL STUDIOS</h1>
        <p>
            <?php
            print "Bouyachaka";
            $db = new mysqli(
                "us-cdbr-azure-southcentral-f.cloudapp.net",
                "b335ab0322abab",
                "8765cd34",
                "database1606149"
            );
            if($db-> connect_errno){
                die('Connectfailed['.$db->connect_error.']');
            }

            $sql_query = "SELECT * FROM marvelmovies WHERE productionStudio LIKE 'Marvel Studios'";
            $result = $db->query($sql_query);
            while($row = $result->fetch_array()){
                echo "<p>".$row['title']. $row['yearReleased']. $row['productionStudio']. $row['notes']."<p>";
            }
            $result->close();
            $db->close();
            ?>
        </p>
    </body>
    <footer>
        <a href="index.php">Home Page Bouyachaka</a>
    </footer>
</html>