<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <h1>Welkom  op het Netland beheerderspaneel</h1>
        <h2>Series</h2>
        <table>
                <th>Titel</th>
                <th>Rating</th>
                <?php
                $host = "127.0.0.1";
                $db = 'netland';
                $user = 'root';
                $pass = '';

                $dsn = "mysql:host=$host;dbname=$db;port=3306";

                try {
                        $pdo = new PDO($dsn, $user, $pass);
                        // echo"connected to db 'Netland'!!";
                $result = $pdo->query('SELECT naam, rating FROM films');
                        while ($show = $result->fetch()) {
                                echo"<table><tr><td>";
                                echo $show['naam'].'</td><td>'.$show['rating'];
                                echo"</td></tr></table>";
                        }
                } catch (\PDOException $e) {
                        throw new \PDOException($e->getMessage("Not connected"));
                }
                ?>
        </table>
        <h2>Films</h2>
        <table>
                <?php
                        $host = "127.0.0.1";
                        $db = 'netland';
                        $user = 'root';
                        $pass = '';

                        $dsn = "mysql:host=$host;dbname=$db;port=3306";

                        try {
                                $pdo = new PDO($dsn, $user, $pass);
                                // echo"connected to db 'Netland'!!";
                        $result = $pdo->query('SELECT titel, duur FROM movies');
                        echo"<th>Titel</th>";
                        echo"<th>Duur</th>";

                                while ($show = $result->fetch()) {
                                        echo"<table><tr><td>";
                                        echo $show['titel'].'</td><td>'.$show['duur'];
                                        echo"</td></tr></table>";
                                }
                        } catch (\PDOException $e) {
                                throw new \PDOException($e->getMessage("Not connected"));
                        }
                        ?>
                        
        </table>
        
</body>
</html>



