<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>ログイン画面。1種類のパスワード</title>
    </head>
    <body>
        <?php
            $gold_id = "goldid";
            $gold_pw = "goldpw";

            $reg_id = "regid";
            $reg_pw = "regpw";

            if($_POST['id'] == $gold_id AND $_POST['password'] == $gold_pw){
                echo "ゴールド会員へログイン成功です！";
            }
            elseif($_POST['id'] == $reg_id AND $_POST['password'] == $reg_pw){
                echo "レギュラー会員へログイン成功です！";
            }
            else{
                echo "ログイン失敗です。";
            }
        ?>
    </body>
</html>
