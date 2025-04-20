<?php
session_start();

// ランダムな正解の数値をセッションに保存（初回アクセス時のみ）
if (!isset($_SESSION['answer'])) {
    $_SESSION['answer'] = mt_rand(1, 100);
}

$message = "";

// フォームが送信された場合の処理
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userInput = isset($_POST["guess"]) ? intval($_POST["guess"]) : null;

    if ($userInput < 1 || $userInput > 100) {
        $message = "数字は1から100の間で入力してください";
    } else {
        if ($userInput < $_SESSION['answer']) {
            $message = "もっと大きいです！";
        } elseif ($userInput > $_SESSION['answer']) {
            $message = "もっと小さいです！";
        } else {
            $message = "正解です！おめでとうございます！";
            // ゲームをリセット（次回のプレイに向けて）
            unset($_SESSION['answer']);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>数字当てゲーム</title>
</head>
<body>
    <h1>1～100の数字を当てよう！</h1>

    <form method="post">
        <label for="guess">数字を入力してください（1〜100）:</label>
        <input type="number" name="guess" id="guess" min="1" max="100" required>
        <button type="submit">送信</button>
    </form>

    <?php if ($message): ?>
        <p><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>
</body>
</html>
