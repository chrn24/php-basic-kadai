<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        //算術演算子を使った場合の戻り値を出力する
        echo 45+18;

        //改行する
        echo '<br>';

        //比較演算子を使った場合の戻り値を出力する
        var_dump(45>18);
        ?>
    </p>
    <p>
        <?php
        //等価演算子を使った場合の戻り値を出力する
        var_dump('5'==5);

        //改行する
        echo '<br>';

        //厳密等価演算子を使った場合の戻り値を出力する
        var_dump('5'===5);
        ?>
    </p>
    <p>
        <?php
        //変数numに0～4￥までのランダムな整数を代入する
        $num=mt_rand(0,4);

        //変数numの値を出力する（確認用）
        echo $num;

        //改行する
        echo '<br>';

        //変数numの値が4であれば、大当たりですと出力する
        //変数numの値が3であれば、当たりですという文字列を出力する
        //それ以外の時は、はずれですと出力する
        if($num===4){
            echo '大当たりです';
        }elseif($num===3){
            echo '当たりです';
        }else{
            echo'はずれです';
        }
        ?>

    </p>
    <p>
        <?php
        $num=10;

        //&&かつを利用して、すべての条件が成り立つ場合に処理を行う（変数の値が11～29）
        if ($num>10 && $num<30){
            echo '変数numは10より大きく、30より小さいです';
        }else{
            echo'条件が成り立ちませんでした';
        }

        //改行する
        echo '<br>';

        $num=30;

        //||またはを利用して、1つでも条件が成り立てば処理を行う（変数の値が10または30）
        if($num>10 || $num<30){
            echo '変数numは10または30です';
        }else{
            echo '条件が成り立ちませんでした';
        }
        ?>
    </p>
</body>
</html>