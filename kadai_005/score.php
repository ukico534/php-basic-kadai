<!-- score.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題：合計点と平均点</title>
</head>
<body>

<?php
// 生徒10人分の点数を変数に代入
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

// 合計点を計算
$total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

// 平均点を計算
$average = $total / 10;

// 結果を表示
echo "合計点は: " . $total . "点<br>";
echo "平均点は: " . $average . "点";
?>

</body>
</html>
