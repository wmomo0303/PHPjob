<?php




for ($i = 0; $i <= 100; $i++) {
    echo $i;
    echo '<br>';

}

echo '<br>';
echo '<br>';


$name = "taro";
$pass = "pas";


if($name === "taro" && $pass === "pass") {
    echo "ログイン成功です。";

}
elseif ($name === "taro") {
    echo "パスワードが間違っています。";
}
elseif ($pass === "pass") {
    echo "名前が間違っています。";
}
else {
    echo "入力情報が間違っています。";
}


echo '<br>';
echo '<br>';

$age = 24;

$is_student = true;

if($age < 25 && $is_student) {
    echo "学割つかえるよ";
}


echo '<br>';
echo '<br>';



define("ADMIN_EMAIL", "aaa@gmail.com");
define("LIST_COUNT", 15);

echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;



?>

