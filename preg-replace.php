<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <h2>
        <?php
        $personal_date=[
            'name'=>'侍太郎',
            'address'=>'侍町7-77',
            'mobile'=>'090-0000-0000'
        ];

        echo '検索対象：';
        print_r($personal_date);
        ?>
    </h2>
    <p>
        <?php
        echo '携帯電話番号を検索し、一致すれば（ハイフン）を削除したものに置換します。<br> ';
        $no_hyphen=preg_replace('/\A(0[7-9]0)-([0-9]{4})-([0-9]{4})\z/', '$1$2$3', $personal_date);
        echo '>置換結果：';
       print_r($no_hyphen);
       ?>
    </p>
    
</body>
</html>