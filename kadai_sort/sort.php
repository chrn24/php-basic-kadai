<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($order){
            //ソートする配列を宣言
            $nums=[15,4,18,23,10];

            if($order===true){
            echo '昇順にソートします。'.'<br>';

                sort($nums);
                foreach($nums as $num){
                    echo $num.'<br>';
                }
            }

            if($order===false){
                echo '降順にソートします。'.'<br>';
                rsort($nums);
                foreach($nums as $num){
                    echo $num.'<br>';
                }
            }
        }

        sort_2way(true);
        sort_2way(false);
        ?>
    </p>
</body>

</html>