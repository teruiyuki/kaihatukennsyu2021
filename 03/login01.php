<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>ログイン画面。1種類のパスワード</title>
    </head>
    <body>
        <h1>ログイン画面01</h1>

        <form method='post' action='result01.php'>
            <table border='1'>
                <tr>
                    <th>IDを入力してください</th>
                    <th>パスワードを入力してください</th>
                </tr>

                <tr>
                    <td><input type="text" name="id"></td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>

            <p>
                <input type="submit" value="送信する">
                <input type="reset" value="リセット">
            </p>

        </form>

    </body>
</html>
