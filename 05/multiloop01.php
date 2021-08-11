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
            <th>名前01</th>
            <th>名前02</th>
            <th>名前03</th>
        </tr>

        <?php
            $team_a = array("阿部","濱田","照井");
            $team_b = array("石井寛","関根","影山");
            $team_c = array("石井沙","和田","矢吹");

            $team_all = array($team_a, $team_b, $team_c);

            foreach($team_all as $all){
                echo "<tr>";
                foreach($all as $member){
                    echo "<td>" . $member . "</td>";
                }
                echo "</tr>";
            }

        ?>
    </body>
</html>
