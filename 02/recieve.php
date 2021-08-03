<!DOCTYPE html>
<html>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>アンケート</title>
    </head>
    <body>

    <?php
        echo "あなたの名前は".$_GET['name']."です。<br>";
        echo "あなたの体型は".$_GET['test']."です。<br>" ;
        echo "鍛えたい部位は".$_GET['bui'][0]."、".$_GET['bui'][1]."、".$_GET['bui'][2]."です。<br>" ;
        echo "入会期間の目安は".$_GET['kikan']."です。<br>" ;
        echo "質問などは".$_GET['kanso']."です。<br>" ;
    ?>
    </body>
</html>
