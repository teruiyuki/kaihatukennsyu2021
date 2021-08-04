<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        table{
            background-color: #cdefff;
        }

        th{
            background-color: #00e2cf;
        }
        <title>消費税計算ページ</title>
    </head>
    <body>
        <h1>消費税計算ページ</h1>

        <form method='post' action='tax.php'>
            <table border="1" style="border-collapse:collapse;">
                <tr>
                    <th colspan="1">商品名</th>
                    <th colspan="1">価格(単位：円抜き、税抜き)</th>
                    <th colspan="1">個数</th>
                    <th colspan="1">税率</th>
                </tr>

                <tr>
                    <td colspan="1"><input type="text" name="name1" size="40" maxlength="10" ></td>
                    <td colspan="1"><input type="text" name="price1" size="40" maxlength="10" ></td>
                    <td colspan="1"><input type="text" name="ko1" >個</td>
                    <td colspan="1"><input type="radio" name="zei1" checked="checked" value="8" />0.8%
                        <input type="radio" name="zei1" value="10" />10%</td>
                </tr>

                <tr>
                    <td colspan="1"><input type="text" name="name2" size="40" maxlength="10" ></td>
                    <td colspan="1"><input type="text" name="price2" size="40" maxlength="10" ></td>
                    <td colspan="1"><input type="text" name="ko2" >個</td>
                    <td colspan="1"><input type="radio" name="zei2" checked="checked" value="8" />0.8%
                        <input type="radio" name="zei2" value="10" />10%<br></td>
                </tr>

                <tr>
                    <td colspan="1"><input type="text" name="name3" size="40" maxlength="10" ></td>
                    <td colspan="1"><input type="text" name="price3" size="40" maxlength="10" ></td>
                    <td colspan="1"><input type="text" name="ko3" >個</td>
                    <td colspan="1"><input type="radio" name="zei3" checked="checked" value="8" />0.8%
                        <input type="radio" name="zei3" value="10" />10%<br></td>
                </tr>

                <tr>
                    <td colspan="1"><input type="text" name="name4" size="40" maxlength="10" ></td>
                    <td colspan="1"><input type="text" name="price4" size="40" maxlength="10" ></td>
                    <td colspan="1"><input type="text" name="ko4" >個</td>
                    <td colspan="1"><input type="radio" name="zei4" checked="checked" value="8" />0.8%
                        <input type="radio" name="zei4" value="10" />10%<br></td>
                </tr>

                <tr>
                    <td colspan="1"><input type="text" name="name5" size="40" maxlength="10" ></td>
                    <td colspan="1"><input type="text" name="price5" size="40" maxlength="10" ></td>
                    <td colspan="1"><input type="text" name="ko5" >個</td>
                    <td colspan="1"><input type="radio" name="zei5" checked="checked" value="8" />0.8%
                        <input type="radio" name="zei5" value="10" />10%<br></td>
                </tr>

            </table>

            <p>
                <input type="submit" value="送信する">
                <input type="reset" value="リセット">
            </p>

        </form>

        <?php
            $price1 = $_POST['price1'];
            $price1 = $price1 * $_POST['ko1'];
            $price1 = $price1 + $price1 * $_POST['zei1'] * 0.01;

            $price2 = $_POST['price2'];
            $price2 = $price2 * $_POST['ko2'];
            $price2 = $price2 + $price2 * $_POST['zei2'] * 0.01;

            $price3 = $_POST['price3'];
            $price3 = $price3 * $_POST['ko3'];
            $price3 = $price3 + $price3 * $_POST['zei3'] * 0.01;

            $price4 = $_POST['price4'];
            $price4 = $price4 * $_POST['ko4'];
            $price4 = $price4 + $price4 * $_POST['zei4'] * 0.01;

            $price5 = $_POST['price5'];
            $price5 = $price5 * $_POST['ko5'];
            $price5 = $price5 + $price5 * $_POST['zei5'] * 0.01;

            $allprice = $price1 + $price2 + $price3 + $price4 + $price5;
        ?>

        <table border="1" style="border-collapse:collapse;">
            <tr>
                <th colspan="1">商品名</th>
                <th colspan="1">価格(単位：円抜き、税抜き)</th>
                <th colspan="1">個数</th>
                <th colspan="1">税率</th>
                <th colspan="1">小計</th>
            </tr>

            <tr>
                <td colspan="1"><?php echo $_POST['name1'];?></td>
                <td colspan="1"><?php echo $_POST['price1'];?>円</td>
                <td colspan="1"><?php echo $_POST['ko1'];?>個</td>
                <td colspan="1"><?php echo $_POST['zei1'];?>%</td>
                <td colspan="1"><?php echo $price1;?>円</td>
            </tr>

            <tr>
                <td colspan="1"><?php echo $_POST['name2'];?></td>
                <td colspan="1"><?php echo $_POST['price2'];?>円</td>
                <td colspan="1"><?php echo $_POST['ko2'];?>個</td>
                <td colspan="1"><?php echo $_POST['zei2'];?>%</td>
                <td colspan="1"><?php echo $price2;?>円</td>
            </tr>

            <tr>
                <td colspan="1"><?php echo $_POST['name3'];?></td>
                <td colspan="1"><?php echo $_POST['price3'];?>円</td>
                <td colspan="1"><?php echo $_POST['ko3'];?>個</td>
                <td colspan="1"><?php echo $_POST['zei3'];?>%</td>
                <td colspan="1"><?php echo $price3;?>円</td>
            </tr>

            <tr>
                <td colspan="1"><?php echo $_POST['name4'];?></td>
                <td colspan="1"><?php echo $_POST['price4'];?>円</td>
                <td colspan="1"><?php echo $_POST['ko4'];?>個</td>
                <td colspan="1"><?php echo $_POST['zei4'];?>%</td>
                <td colspan="1"><?php echo $price4;?>円</td>
            </tr>

            <tr>
                <td colspan="1"><?php echo $_POST['name5'];?></td>
                <td colspan="1"><?php echo $_POST['price5'];?>円</td>
                <td colspan="1"><?php echo $_POST['ko5'];?>個</td>
                <td colspan="1"><?php echo $_POST['zei5'];?>%</td>
                <td colspan="1"><?php echo $price5;?>円</td>
            </tr>

            <tr>
                <td colspan="4" style="text-align:left;">合計</td>
                <td colspan="1"><?php echo $allprice;?>円</td>
            </tr>

        </table>

    </body>
</html>
