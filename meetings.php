<?php
$organizations = [
    "コーポレート部門",
    "地球環境エネルギーグループ",
    "マテリアルソリューショングループ",
    "金属資源グループ",
    "社会インフラグループ",
    "モビリティグループ",
    "食品産業グループ",
    "S.L.C.グループ",
    "電力ソリューショングループ"
];

$names = ["田中", "佐藤", "鈴木", "高橋", "伊藤", "山本", "渡辺", "中村", "小林", "加藤"];
$firstNames = ["太郎", "次郎", "花子", "よし子", "さとし", "りょうた", "まい", "あきら", "ゆうた", "みき"];

$contacts = [];

for ($i = 0; $i < 100; $i++) {
    $lastName = $names[array_rand($names)];
    $firstName = $firstNames[array_rand($firstNames)];
    $fullName = $lastName . ' ' . $firstName;
    $email = strtolower($firstName . '.' . $lastName) . '@example.com';
    $organization = $organizations[array_rand($organizations)];

    $contacts[] = ['name' => $fullName, 'email' => $email, 'organization' => $organization];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会議のスケジュール</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="meetings-container">
    <div class="organization">
    <h1>電話帳《※データはダミー》</h1>
    <p>以下コンタクトを取りたい先のメールをクリックして、面談日程を調整することが可能です！</p>
    <?php foreach ($organizations as $organization): ?>
        <h2><?php echo htmlspecialchars($organization, ENT_QUOTES, 'UTF-8'); ?></h2>
        <ul>
            <?php foreach ($contacts as $contact): ?>
                <?php if ($contact['organization'] === $organization): ?>
                    <li>
                        <?php echo htmlspecialchars($contact['name'], ENT_QUOTES, 'UTF-8'); ?>
                        - <a href="mailto:<?php echo htmlspecialchars($contact['email'], ENT_QUOTES, 'UTF-8'); ?>">メールを送る</a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>

    <p><a href="index.html">ホームに戻る</a></p>
</body>
</html>