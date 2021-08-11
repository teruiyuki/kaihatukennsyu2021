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
        <h1>照井の好きな本のリスト</h1>
        <table border="1" style="border-collapse:collapse";>

        <tr>
            <th>タイトル</th>
            <th>著者</th>
            <th>価格</th>
            <th>面白さ</th>
            <th>メモ</th>
        </tr>

        <?php
            $book01 = array(
                "name" => "日本再興戦略",
                "tyosya" => "落合陽一",
                "nedan" => "1540",
                "omoshirosa" => "8",
                "memo" => "発売日：2018年1月",
            );
            $book02 = array(
                "name" => "10年後の仕事図鑑",
                "tyosya" => "堀江貴文",
                "nedan" => "1540",
                "omoshirosa" => "8",
                "memo" => "発売日：2018年4月",
            );
            $book03 = array(
                "name" => "ランウェイで笑って",
                "tyosya" => "猪ノ谷言葉",
                "nedan" => "495",
                "omoshirosa" => "10",
                "memo" => "発売日：2017年9月(1巻発売)",
            );


            $books = array($book01, $book02, $book03);

            foreach($books as $each){
                echo "<tr>";
                echo "<td>" . $each['name'] . "</td> ";
                echo "<td>" . $each['tyosya'] . "</td> ";
                echo "<td>" . $each['nedan'] . "</td> ";
                echo "<td>" . $each['omoshirosa'] . "</td> ";
                echo "<td>" . $each['memo'] . "</td>";
                echo "</tr>";
            }
        ?>
        </table>
    </body>
</html>
