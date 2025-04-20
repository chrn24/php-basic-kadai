<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <h2>
       <?php
       $emails = [
           'taro.samurai55@example.com',
           'taro.samurai55@@example.com',
           '875-samurai.example',
           '875.Samurai@example.com'
       ];

       echo '検索対象：';
       print_r($emails);
       ?>
   </h2>
   <p>
       <?php
       echo 'メールアドレスのフォーマットと完全に一致している要素のみを配列で返します。<br>';

       $right_emails = preg_grep('/\A[a-zA-Z0-9.]+@[a-zA-Z0-9.]+\z/', $emails);

       echo '>返却結果：';
       print_r($right_emails);
       ?>
   </p>
</body>

</html>