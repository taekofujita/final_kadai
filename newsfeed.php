<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ニュースフィード - TSUNA GOOD👍</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="news-container">
    <h1>ニュースフィード</h1>
    <p>ここに会社からの最新ニュースが表示されます。</p>

    <p>① 会社サイトは👇をクリック！</p>
    <p><a href="https://www.mitsubishicorp.com/jp/ja/" target="_blank">訪問: 三菱商事ホームページ</a></p>

    <p></p>

    <p>② 最新の株価を👇チェック！</p>
    <?php
    // APIから株価情報を取得する方法？？？
    $api_key = 'YOUR_API_KEY';
    $symbol = '8058.TYO'; // MCのコード
    $url = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=$symbol&apikey=$api_key";
    
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    
    if ($data && isset($data["Global Quote"]["05. price"])) {
    $price = $data["Global Quote"]["05. price"];
    echo "<p>三菱商事の株価: ¥" . number_format($price, 2) . "</p>";
    } else {
    echo "<p>株価情報を取得できませんでした。</p>";
    }
    ?>

　　<p>③ 最新組織図は👇をチェック！</p>
    <p>最新組織図（2024年4月時点）:</p>
    <img src="ダミー組織図.jpg" alt="ダミー組織図" width="100%" height="auto">
    <p>詳細な情報は<a href="https://www.mitsubishicorp.com/jp/ja/about/profile/" target="_blank">こちら</a>からご覧下さい。</p>
    
    <p><a href="index.html">ホームに戻る</a></p>
</body>
</html>