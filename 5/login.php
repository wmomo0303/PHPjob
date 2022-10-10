<?php
require_once('pdo.php');
// セッション開始
session_start();



if (!empty($_POST)) {
    if (empty($_POST["name"])) {
        echo "名前が未入力です。";
    }
    if (empty($_POST["pass"])) {
        echo "パスワードが未入力です。";
    }



    if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
        //ログイン名とパスワードのエスケープ処理（htmlタグの影響受けないように）
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);


        $pdo = connect();
        try {
            //ログイン名があるか判定
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        // 結果が1行取得できたら
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            // パスワードが入力されたものと同じか判定
            if (password_verify($pass, $row['password'])) {
                // セッションに保存
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
  
                header("Location: main.php");
                exit;
            } else {
                // パスワードがちがってたとき
                echo "パスワードに誤りがあります。";
            }
        } else {
            //ログイン名がなかったとき
            echo "ユーザー名かパスワードに誤りがあります。";
        }
    }
}
?>
<!doctype html>
<html lang="ja">
    <head>
    <link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ログインページ</title>
    </head>
    <body>
        <div class="flex"><h2>ログイン画面</h2>
        <a href="signUp.php" class="btn_green">新規ユーザー登録</a></div>
        <form method="post" action="">
            <input type="text" name="name" placeholder="ユーザー名" class="aida"><br>
            <input type="text" name="pass" placeholder="パスワード" class="aida"><br>
            <input type="submit" value="ログイン" class="btn_ao2">
        </form>
    </body>
</html>

