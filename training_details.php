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

$id = $_GET['id'] ?? 0;
$training = isset($trainings[$id - 1]) ? $trainings[$id - 1] : null;

if (!$training) {
    echo "<h1>研修プログラムが見つかりません。</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($training['title'], ENT_QUOTES, 'UTF-8'); ?> - 研修詳細</title>
</head>
<body>
    <h1><?php echo htmlspecialchars($training['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
    <h2>研修内容</h2>
    <p><?php echo htmlspecialchars($training['content'], ENT_QUOTES, 'UTF-8'); ?></p>
    <h2>申し込み方法</h2>
    <p><?php echo htmlspecialchars($training['apply'], ENT_QUOTES, 'UTF-8'); ?></p>
    <h2>研修効果</h2>
    <p><?php echo htmlspecialchars($training['effect'], ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>