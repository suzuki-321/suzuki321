<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>計算フォーム</title>
</head>
<body>
<h1>計算フォーム</h1>
<form action="result.php" method="POST">
<label for="num1">数字1</label>
<input type="number" name="num1" required>
<select name="operator">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">×</option>
<option value="/">÷</option>
</select>
<label for="num2">数字2</label>
<input type="number" name="num2" required>
<input type="submit" value="計算">
</form>
</body>
</html>
