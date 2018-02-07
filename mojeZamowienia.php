<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Moje Zamówienia</title>
    </head>
    <body>

        <?php
        
        $conn = mysqli_connect('gitner.pl', 'gitner_login', '', 'gitner_login', '3306');
        if (!$conn) {
            die('Could not connect to MySQL: ' . mysqli_connect_error());
        }
        mysqli_query($conn, 'SET NAMES \'utf8\'');

        
        echo '<table>';
        echo '<tr>';
        echo '<th>data_zamowienia</th>';
        echo '<th>asortyment</th>';
        echo '<th>ilosc</th>';
        echo '</tr>';
        $result = mysqli_query($conn, 'SELECT data_zamowienia, asortyment, ilosc FROM kwiatki_zamowienia');
        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
            echo '<tr>';
            echo '<td>' . $row['data_zamowienia'] . '</td>';
            echo '<td>' . $row['asortyment'] . '</td>';
            echo '<td>' . $row['ilosc'] . '</td>';
            echo '</tr>';
        }
        mysqli_free_result($result);
        echo '</table>';
        
        
        mysqli_close($conn);
        
        ?>
        
    </body>
</html>
