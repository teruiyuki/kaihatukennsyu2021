<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>連想配列・配列のネスト</title>
        <style type="text/css">
            th{
                background-color: #00e2cf;
            }
        </style>
    </head>
    <body>
        <h1>連想配列・配列のネスト</h1>
        <table border="1" style="border-collapse:collapse";>

        <tr>
            <th>背番号</th>
            <th>名前</th>
            <th>ポジション</th>
            <th>出身地</th>
            <th>入団年</th>
        </tr>

        <?php
            $player01 = array(
                "id" => "3",
                "name" => "梶谷隆幸",
                "position" => "外野手",
                "from" => "島根",
                "year" => "2007",
            );
            $player02 =  array(
                "id" => "44",
                "name" => "佐野恵太",
                "position" => "外野手",
                "from" => "岡山",
                "year" => "2017",
            );
            $player03 =  array(
                "id" => "15",
                "name" => "井納翔一",
                "position" => "投手",
                "from" => "東京",
                "year" => "2013",
            );

            $players = array($player01, $player02, $player03);

            foreach($players as $each){
                echo "<tr>";
                echo "<td>" . $each['id'] . "</td> ";
                echo "<td>" . $each['name'] . "</td> ";
                echo "<td>" . $each['position'] . "</td> ";
                echo "<td>" . $each['from'] . "</td> ";
                echo "<td>" . $each['year'] . "</td>";
                echo "</tr>";
            }
        ?>
        </table>
    </body>
</html>
