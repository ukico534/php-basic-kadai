<?php
$nums = [15, 4, 18, 23, 10];

function sort_2way($array, $is_asc) {
    if ($is_asc === true) {
        echo "昇順にソートします。<br>";
        sort($array);
    } else {
        echo "降順にソートします。<br>";
        rsort($array);
    }

    foreach ($array as $num) {
        echo $num . "<br>";
    }
}

sort_2way($nums, true);   // 昇順
echo "<br>";              // 区切り
sort_2way($nums, false);  // 降順
?>
