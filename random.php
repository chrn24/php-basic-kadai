<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        //変数diceにさいころの出目（1から6までのランダムな整数）を代入する
        $dice=mt_rand(1,6);

        //さいころの出目を出力する
        echo "{$dice}の目が出ました。";
        ?>
    </p>
    <p>
        <?php
        //おみくじの結果を入れた配列$omikujiを作成する
        $omikuji=['大吉','中吉','小吉','吉','末吉','凶'.'大凶'];

        //変数$keyにランダムな配列のキー（インデックス）を代入する
        $key=array_rand($omikuji);

        //取得した配列キー（インデックス）を使ってその値を取得し、変数$resultに代入する
        $result=$omikuji[$key];

        //おみくじの結果を出力する
        echo "おみくじの結果は{$result}です。";
        ?>
    </p>
</body>
</html>