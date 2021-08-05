<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>ログイン画面。1種類のパスワード</title>
    </head>
    <body>
        <?php
            $id = "hogehoge";
            $password = "psps";

            if($_POST['id'] == $id AND $_POST['password'] == $password){
                echo "ログイン成功です！";
            }
            else{
                echo "ログイン失敗です。";
            }
        ?>
    </body>
</html>
