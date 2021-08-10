<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>2次元配列</title>
    </head>
    <body>
        <h1>2次元配列</h1>
        <?php
            $fruit[0] = "りんご";
            $fruit[1] = "すいか";
            $fruit[2] = "みかん";
            $fruit[3] = "なし";
            $fruit[4] = "イチゴ";
            $fruit[5] = "かき";

            "<pre>".var_dump($fruit)."<pre>";

            echo "<hr>";

            for($i=0; $i < count($fruit) ; $i++){
                echo $fruit[$i] . "<br/>";
            }

            echo "<hr>";

            foreach($fruit as $each){
                echo $each . "<br/>";
            }

            echo "<hr>";

            foreach($fruit as $key => $value){
                echo $key . "番目の要素は" . $value . "です。<br/>";
            }
            // 検索する文字列
            $needle = "みかん";

            if(in_array($needle, $fruit)) {
                echo $needle . " がfruitの要素の値に存在しています";
            } else {
                echo $needle . " がfruitの要素の値に存在しません";
            }
        ?>
    </body>
</html>
