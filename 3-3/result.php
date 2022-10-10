<?php

$num = $_POST['num'];

// 文字列の長さ
$num_su = strlen($num);

// ランダム
$num_rndm = mt_rand(0,$num_su);

// 切り取り
$num2 = substr($num,$num_rndm ,1);


if ($num2 >= 1 && $num2 <= 3) {
    $str = "小吉";
}
else if ($num2 >= 4 && $num2 <= 6) {
    $str = "中吉";

}
else if ($num2 == 7 || $num2 == 8) {
    $str = "吉";

}
else if ($num2 == 9 ) {
    $str = "大吉";
} else if($num2 == 0 ) {
    $str = "凶";

}

?>


<p><?php echo date("Y/m/d") ?>の運勢は</p>
<p>選ばれた数字は<?php echo $num2 ?></p>
<p><?php echo $str ?></p>

