<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>


<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

$name = $_POST['name'];
$sntk1 = $_POST['sntk1'];
$sntk2 = $_POST['sntk2'];
$sntk3 = $_POST['sntk3'];

$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];



//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function kotaeawase ($s, $a) {
    if($s == $a){
        echo "正解！";
    } else {
        echo "残念・・・";
    }

}


?>

<br>
<br>

<p><?php echo $name ?>さんの結果は・・・？</p>
<p>①の答え</p>
<?php kotaeawase($sntk1,$answer1); ?>

<p>②の答え</p>
<?php kotaeawase($sntk2,$answer2); ?>

<p>③の答え</p>
<?php kotaeawase($sntk3,$answer3); ?>

</body>
</html>