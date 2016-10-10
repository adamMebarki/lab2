<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
            <p>
                <br>LAB TWO<br>
                <?php
                    print "Bouyachaka";
                ?>
            </p>

    <p>
        <?php

            //1. Connect to a database server
            //2. Choose a database

            // connect to csdm webdev server and select database
            $db = new mysqli(
                "us-cdbr-azure-southcentral-f.cloudapp.net",
                "b335ab0322abab",
                "8765cd34",
                "database1606149"
            );
            // test if connection was established, and print any errors
            if($db-> connect_errno){
                die('Connectfailed['.$db->connect_error.']');
            }
            //3. Execute a SQL query
            // create a SQL query as a string
                $sql_query = "SELECT * FROM marvelmovies WHERE title LIKE '%X%' ";
            // execute the SQL query
            $result = $db->query($sql_query);

            //4. Process set of results for SQL query
            // iterate over $result object one $row at a time
            // use fetch_array() to return an associative array
            //5. Process an individual result
            while($row = $result->fetch_array()){
                //process the $row
                // print out fields from roz of data
                echo "<p>".$row['title'] ."<p>";
            }

            //6. Close connection to database
            $result->close();
            $db->close();
        ?>

    </p>


    <p>
        <ul>
            <li><a href="allMovies.php">All Marvel's films</a></li>
            <li><a href="marvelStudios.php">All films created by Marvel Studios</a></li>
            <li><a href="dateMovies.php">All Marvel films created after 2010</a></li>
            <li><a href="xmenFilms.php">All X-Men films</a></li>
        </ul>
    </p>


    </body>
</html>