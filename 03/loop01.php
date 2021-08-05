<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <style>
            table th{
                background: #00ffff;
            }
        </style>
        <title>ループで表を作る01</title>
    </head>
    <body>
        <h1>ループで表を作る01</h1>

        <form method="get" action="loop01.php">
            <p>表は何行にしますか？</p>
            <p><input type="text" name="cols">行の表を生成する</p>

            <p>
                <input type="submit" value="送信する">
                <input type="reset" value="リセット">
            </p>
        </form>

        <table border='1'>
            <tr>
                <th>苗字</th>
                <th>名前</th>
            </tr>

            <?php
                $pink = 'style="background-color: #ffb6c1;"';
                $orange = 'style="background-color: #ffa07a;"';

                for($i=0; $i < $_GET['cols']; $i++){
                    if($i % 2 == 0){
                        echo "<tr><td" .$pink. ">照井</td><td" .$pink. ">裕基</td></tr>";
                    }
                    else{
                        echo "<tr><td" .$orange. ">わっくん</td><td" .$orange. ">れっくん</td></tr>";
                    }
                }
            ?>
        </table>
    </body>
</html>
