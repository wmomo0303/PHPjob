<?php

require_once("pdo.php");

// POSTで送られていれば処理実行
if(isset($_POST["signUp"])) {

    if(empty($_POST["name"])) {
        echo '名前が未入力です。';
    } elseif (empty($_POST["pass"])) {
        echo 'パスワードが未入力です。';

    }


    if (!empty($_POST["name"]) && !empty($_POST["pass"])) {

        $pdo = connect();

        try {
            $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";

            $name = $_POST["name"];
            $pass = $_POST["pass"];
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':password', $pass_hash);
            $stmt->execute();

            echo '登録完了しました。';

        } catch (PDOException $e) {
            echo 'データベースエラー';
            //echo 'Error:' . $e->getMessage();
                die();
        }   
    }
}
?>

 
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>登録画面</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>ユーザー登録画面</h2>
<form method="POST" action="">
<input type="text" name="name" id="name" placeholder="ユーザー名" size="30" class="aida"><br>
<input type="password" name="pass" id="pass" placeholder="パスワード" size="30" class="aida" style="width:300px;height:30px;"><br>
<input type="submit" value="新規登録" id="signUp" name="signUp" class="btn_ao2" class="aida">

</form>
</body>
</html>

