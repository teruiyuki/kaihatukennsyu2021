<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>DBからデータを持ってくる</title>
        <style type="text/css">
            th{
                background-color: #00e2cf;
            }
        </style>
    </head>
    <body>
        <h1>DBからデータを持ってくる</h1>

        <table border="1" style="border-collapse:collapse";>
            <tr>
                <th>商品名</th>
                <th>ジャンル</th>
                <th>値段</th>
                <th>メモ</th>
            </tr>

        <?php
            $DB_DSN = "mysql:host=localhost; dbname=yterui; charset=utf8";
            $DB_USER = "webaccess";
            $DB_PW = "toMeu4rH";
            $pdo = new PDO($DB_DSN, $DB_USER, $DB_PW);

            $query_str = "SELECT * FROM oshinagaki WHERE 1";

            echo $query_str;
            $sql = $pdo->prepare($query_str);
            $sql->execute();
            $result = $sql->fetchAll();

            foreach($result as $name){
                echo "<tr><td>" . $name['name'] . "</td>";
                echo "<td>" . $name['janru'] . "</td>";
                echo "<td>" . $name['price'] . "</td>";
                echo "<td>" . $name['memo'] . "</td></tr>";
            }
        ?>

        </table>
    </body>
</html>
