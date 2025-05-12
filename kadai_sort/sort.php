<?php
$nums = [15, 4, 18, 23, 10];

function sort_and_display($array, $order) {
    if ($order === 'asc') {
        echo "昇順にソートします。<br>";
        sort($array); // 昇順
    } elseif ($order === 'desc') {
        echo "降順にソートします。<br>";
        rsort($array); // 降順
    }

    foreach ($array as $num) {
        echo $num . "<br>";
    }
}

sort_and_display($nums, 'asc');
echo "<br>"; // 区切り
sort_and_display($nums, 'desc');
?>
