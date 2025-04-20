<?php
const START_POSITION = 0; // スタートのマス目
const GOAL_POSITION = 10; // ゴールのマス目

$now_pos = START_POSITION; // 現在位置
$roll_count = 0; // 振った回数
$items = []; // アイテムを格納する配列

// 3の倍数のマス目にアイテムを配置する
for ($i = 1; $i <= GOAL_POSITION - 1; $i++) {
    $items[] = ($i % 3 === 0) ? 'アイテム' : '';
}

echo 'すごろくゲームを開始します！<br>';

// ゴールにたどり着くまでサイコロを振り続ける
while ($now_pos !== GOAL_POSITION) {

    // サイコロを振る
    $dice = mt_rand(1, 6);

    // 現在位置を進める
    $now_pos += $dice;
    // 振った回数を加算
    $roll_count++;

    echo "{$roll_count}回目：{$dice}が出ました！現在{$now_pos}マス目です。<br>";

    if ($now_pos > GOAL_POSITION) { // ゴールを超えた場合は振り出しに戻る
        $now_pos = START_POSITION;
        echo 'ゴールを超えたため振り出しに戻ります。<br>';
    } elseif ($now_pos === GOAL_POSITION) { // ゴールにピッタリ止まったらクリア
        echo 'ゴールに到達しました！<br>';
    } elseif (START_POSITION < $now_pos &&
    $now_pos < GOAL_POSITION &&
    $items[$now_pos - 1] !== '') { // アイテムがあれば取得
echo 'アイテムを獲得しました！<br>';
}
}

echo 'おめでとうございます！ゲームクリアです。';
?>