
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者画面</title>
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <h1 id="top">アンケート集計結果</h1>
<table>
<?php 
$file = fopen('data/data.csv', 'r'); // ファイルを開く
stream_filter_prepend($file,'convert.iconv.cp932/utf-8'); // ストリームフィルタ指定

// ファイル内容を1行ずつ読み込んで出力
while (($data = fgetcsv($file)) !== FALSE) {
    echo "<tr>\n"; // 行タグの開始を出力
    foreach ($data as $value) {
        echo "<td>{$value}</td>\n"; // データをセルタグで囲んで出力
    }
    echo "</tr>\n"; // 行タグの終了を出力
}
fclose($file); // ファイルを閉じる
?>
</table>

</body>
</html>
