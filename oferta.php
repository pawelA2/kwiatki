<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Moje Zamówienia</title>
    </head>
    <body>

       <?php
       
       $conn = mysqli_connect('gitner.pl', 'gitner_login', 'P@ssw0rd123', 'gitner_login', '3306');
       if (!$conn) {
           die('Could not connect to MySQL: ' . mysqli_connect_error());
       }
       mysqli_query($conn, 'SET NAMES \'utf8\'');
       
       
       mysqli_close($conn);
       
       ?>
        
    </body>
</html>
