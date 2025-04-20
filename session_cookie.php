<?php
//セッションを開始
session_start();

//クッキーがあれば氏名を取得
if(isset($_COOKIE['name'])){
    $user_name=$_COOKIE['name'];
}else{
    //ユーザー名はまだ不明のため「名無し」とする
    $user_name='名無し';

    //クッキーがなければ登録（今回は固定）
    setcookie('name','侍太郎',time()+3600);
    echo 'クッキーを追加します。有効期限は1時間です。';
}


//セッションにデータを保存
if(isset($_SESSION[$user_name])){
    //セッション変数があれば、訪問回数を1加算
    $_SESSION[$user_name]++;

    //訪問回数が3回を超えたらクッキーを削除
    if($_SESSION[$user_name]>3){
        setcookie('name','',time()-100);
    }
}else{
    //セッション変数がなければ、1（初回訪問）をセット
    $_SESSION[$user_name]=1;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        echo 'ようこそ'.$user_name. 'さん、'.$_SESSION[$user_name]. '回目の訪問です。';

        //訪問回数が3回を超えたらセッションを終了
        if ($_SESSION[$user_name]>3){
            echo 'セッションを終了します。';
            $_SESSION=array();
            session_destroy();
        }
        ?>
    </p>
</body>
</html>