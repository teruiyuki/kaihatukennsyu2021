<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        </style>
        <title>ループで表を作る01</title>
    </head>
    <body>
        <h1>ループで表を作る02</h1>

        <form method="get" action="loop02.php">
            <p>表は何行の何列にしますか？</p>
            <p><input type="text" name="gyou">行<input type="text" name="retu">列の表を生成する</p>

            <p>
                <input type="submit" value="送信する">
                <input type="reset" value="リセット">
            </p>
        </form>

        <table border='1'>
            <?php
                for($i=0; $i < $_GET['gyou']; $i++){
                    echo "<tr>";
                    for($s=0; $s < $_GET['retu']; $s++){
                        echo "<td>テスト</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
