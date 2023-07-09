
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート回答画面</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/top.css">
</head>
</head>
<body>
<form action="write1.php" method="post">
	<h1>Varlcor 首枕をお買い上げいただきありがとうございます！</h1>
	<div><a href="https://amzn.asia/d/8qNy8Lq"> <img id="makura" src="./img/img.jpg" alt=""></a></div>
	<h1>購入後アンケートに回答し、次回お買い物で使える10%クーポンをGetしよう！</h1>
	<table id="table1">
		<tr>
			<td>お名前</td>
			<td class = "textarea"><input type="text" name="name"></td>
		</tr> 

		<tr>
			<td>EMAIL</td>
			<td class = "textarea"><input type="text" name="mail"></td>
		</tr>

		<tr>
			<td>年齢</td>
			<td>
				<select name="age">
					<option value="--">--</option>
					<option value="10代後半">10代後半</option>
					<option value="20代前半">20代前半</option>
					<option value="20代後半">20代後半</option>
					<option value="30代前半">30代前半</option>
					<option value="30代後半">30代後半</option>
					<option value="40代前半">40代前半</option>
					<option value="40代後半">40代後半</option>
					<option value="50代前半">50代前半</option>
					<option value="50代後半">50代後半</option>
					<option value="60代前半">60代前半</option>
					<option value="60代後半">60代後半</option>
					<option value="70代前半">70代前半</option>
					<option value="70代後半">70代後半</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>性別</td>
			<td>
				<h2><input type="radio" name="sex" value = "男">男</h2>
				<h2><input type="radio" name="sex" value = "女">女</h2>
				<h2><input type="radio" name="sex" value = "非回答">非回答</h2>
			</td>
		</tr>

		<tr>
		</tr>
		<tr>
			<td>商品を知ったきっかけ</td> 
			<td> 
				<select name="reason">
					<option value="--">--</option>
					<option value="インターネットの広告">インターネットの広告</option>
					<option value="SNS">SNS</option>
					<option value="Webサイト・ブログ">Webサイト・ブログ</option>
					<option value="友人・知人の紹介">友人・知人の紹介</option>
					<option value="友人・知人の紹介">その他</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>満足度</td>
			<td>
				<h2><input type="radio" name="satisfaction" value = "とても満足">とても満足</h2>
				<h2><input type="radio" name="satisfaction" value = "どちらかといえば満足">どちらかといえば満足</h2>
				<h2><input type="radio" name="satisfaction" value = "ふつう">ふつう</h2>
				<h2><input type="radio" name="satisfaction" value = "どちらかといえば不満">どちらかといえば不満</h2>
				<h2><input type="radio" name="satisfaction" value = "とても不満">とても不満</h2>
			</td>
		</tr>
	</table>
	<div class = "submitbtn">  <input type="submit" value="送信"> </div>
</form>

</body>
</html>
