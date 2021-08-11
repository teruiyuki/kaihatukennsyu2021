<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>連想配列・配列のネスト</title>
    </head>
    <body>
        <h1>連想配列・配列のネスト</h1>
        <?php

            //書き方2
            $book_data = [
                'comic' => '漫画',
                'nobel' => '小説',
                'study' => '勉強',
                'other' => 'その他',
            ];

            // 書き方その３
            $me_data['fruit'] = 'スイカ';
            $me_data['sport'] = '野球';
            $me_data['town'] = '横浜';
            $me_data['age'] = 21;
            $me_data['food'] = 'カレーライス';


            foreach($me_data as $each){
                echo $each . "<br>";
            }

            foreach($book_data as $key => $value){
                echo $key . "の要素は" . $value . "です<br>";
            }

        ?>
    </body>
</html>
