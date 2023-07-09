<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>


<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}
$name = h($_POST["name"]);
$mail = h($_POST["mail"]);
$age = h($_POST["age"]);
$sex = h($_POST["sex"]);
$reason = h($_POST["reason"]);
$satisfaction = h($_POST["satisfaction"]);

//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$age.",".$sex.",".$reason.",".$satisfaction;
//File書き込み。なお以下３行はいつものセットでつかう。
$file = fopen("data/data.csv","a+");	// ファイル読み込み
stream_filter_prepend($file,'convert.iconv.utf-8/cp932'); //ストリームフィルタ指定
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>回答完了</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/top.css">
</head>
<body>

<h1>ご回答ありがとうございました！</h1>
<h1>クーポンコードは 　MIL 5th　 です。</h1>
<h1>またのご利用お待ちしております。</h1>
<img src="./img/panda.jpeg" alt="">

</body>
</html>