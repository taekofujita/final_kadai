<?php
$trainings = [];
$topics = [
    'コミュニケーション' => 'ビジネススキル',
    'プロジェクトマネジメント' => 'プロジェクト管理',
    'リーダーシップ' => 'リーダーシップ',
    'データ分析' => 'テクノロジー',
    'マインドフルネス' => 'ウェルネス',
    'マーケティング' => 'マーケティング',
    '営業戦略' => 'ビジネススキル',
    'ITセキュリティ' => 'テクノロジー',
    'クリエイティブ思考' => 'クリエイティブ',
    '人事管理' => '人事'
];

$descriptions = ['基礎から応用までを学ぶ', '効果的な技術の習得', '実践的なワークショップ', '最新の業界知識の提供'];

for ($i = 1; $i <= 50; $i++) {
    $topicKey = array_rand($topics);
    $topic = $topicKey;
    $genre = $topics[$topicKey];
    $description = $descriptions[array_rand($descriptions)];
    $title = "{$topic}研修";
    $content = "この研修では{$description}、{$topic}の理解を深めます。";
    $apply = "お申し込みは当社ウェブサイトから可能です。";
    $effect = "{$topic}のスキル向上が期待されます。";

    $trainings[] = [
        'title' => $title,
        'content' => $content,
        'apply' => $apply,
        'effect' => $effect,
        'genre' => $genre
    ];
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>研修プログラム一覧</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="training-container">
    <h1>研修プログラム一覧</h1>
    <?php 
    // ジャンルごとに研修プログラムを分類
    $genres = array_column($trainings, 'genre');
    $uniqueGenres = array_unique($genres);

    foreach ($uniqueGenres as $genre): ?>
        <h2><?php echo htmlspecialchars($genre, ENT_QUOTES, 'UTF-8'); ?></h2>
        <ul>
            <?php foreach ($trainings as $training):
                if ($training['genre'] === $genre): ?>
                    <li>
                        <a href="#">
                            <?php echo htmlspecialchars($training['title'], ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                        - <span><?php echo htmlspecialchars($training['content'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </li>
                <?php endif; 
            endforeach; ?>
        </ul>
    <?php endforeach; ?>
    <p><a href="index.html">ホームに戻る</a></p>
</body>
</html>
