<?php

$filename = 'comments.txt';
$comments = file_exists($filename) ? file_get_contents($filename) : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment'])) {
    // 新しいコメント
    $newComment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8') . "\n";
    file_put_contents($filename, $newComment, FILE_APPEND);
    header("Location: forum.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>情報交換フォーラム</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="forum-container">
    <h1>情報交換フォーラム</h1>
    <h2>コメントを投稿</h2>
    <form action="forum.php" method="post">
        <textarea name="comment" rows="4" cols="50" required></textarea>
        <br>
        <button type="submit">送信</button>
    </form>
    <h2>過去のコメント</h2>
    <pre><?php echo htmlspecialchars($comments, ENT_QUOTES, 'UTF-8'); ?></pre>

    <p><a href="index.html">ホームに戻る</a></p>
</body>

</html>
