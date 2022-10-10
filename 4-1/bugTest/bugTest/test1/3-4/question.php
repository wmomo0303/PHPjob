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
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$sntk1 = [80,22,20,21];
$sntk2 = ["PHP","Python","JAVA","HTML"];
$sntk3 = ["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer = [0,3,1];

?>
    <br>
    <br>

<p>お疲れ様です<?php echo $name ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="POST">
<h2>①ネットワークのポート番号は何番？</h2>
<?php $i = 0; ?>
<?php foreach ($sntk1 as $a) { ?>
    <input type="radio" name="sntk1" value=<?=$i?> /><?php echo $a; ?>
    <?php $i++; ?>
<?php  } ?>


<h2>②Webページを作成するための言語は？</h2>
<?php $i = 0; ?>
<?php foreach ($sntk2 as $a) { ?>
    <input type="radio" name="sntk2" value=<?=$i?> /><?php echo $a; ?>
    <?php $i++; ?>
<?php  } ?>


<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php $i = 0; ?>
<?php foreach ($sntk3 as $a) { ?>
    <input type="radio" name="sntk3" value=<?=$i?> /><?php echo $a; ?>
    <?php $i++; ?>
<?php  } ?>


<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<br>
<input type="hidden" name="name" value=<?= $name ?> />

<input type="hidden" name="answer1" value=<?= $answer[0] ?> />
<input type="hidden" name="answer2" value=<?= $answer[1] ?> />
<input type="hidden" name="answer3" value=<?= $answer[2] ?> />

<input type="submit" value="回答する" />

</form>


</body>
</html>