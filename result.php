<?php
$errors = array();
if (!is_numeric($_POST['num1'])) {
	$errors[] = '数字1は必ず数字を入力してください。';
} else {
	$num1 = $_POST['num1'];
}
if (!is_numeric($_POST['num2'])) {
	$errors[] = '数字2は必ず数字を入力してください。';
} else {
	$num2 = $_POST['num2'];
}
if (isset($num1) && isset($num2)) {
	$ope = $_POST['operator'];
	switch ($ope) {
		case "+":
			$result = $num1 + $num2;
			break;
		case "-":
			$result = $num1 - $num2;
			break;
		case "*":
			$result = $num1 * $num2;
			break;
		case "/":
			if ($num2 == 0) {
				$errors[] = '0で割ることはできません';
			} else {
				$result = $num1 / $num2;
			}
			break;
	}
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>計算結果</title>
</head>
<body>
<h1>計算結果</h1>
<?php if (isset($num1) && isset($num2) && $num2 != 0): ?>
<p><?php echo $result; ?></p>
<?php else: ?>
<?php foreach ($errors as $error): ?>
<p><?php echo $error; ?></p>
<?php endforeach; ?>
<?php endif; ?>
</body>
</html>
