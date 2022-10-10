<?php
require_once('pdo.php');
require_once('function.php');

check_user_logged_in();



if (isset($_POST["post"])) {

    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '発売日が未入力です。';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未入力です。';
    }


    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {

        $title = $_POST["title"];
        $date = $_POST["date"];
        $stock = $_POST["stock"];

        $pdo = connect();

        try {
            $sql = "INSERT INTO books (title, date, stock) VALUES (:title, :date, :stock)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue('title', $title);
            $stmt->bindValue('date', $date);
            $stmt->bindValue('stock', $stock);
            $stmt->execute();

            header("Location: main.php");
            exit();

        } catch (PDOException $e) {
            echo 'Error: ' .$e->getMessage();
            die();
            }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>本登録</title>
    <meta charset=UTF-8>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>本 登録画面</h1>
    <form  method="POST" action="">
    <input type="text" name="title" id="title" placeholder="タイトル" class="aida"><br>
    <input type="text" name="date" id="date" placeholder="発売日" class="aida"><br>
    在庫数<br>
    <select name="stock" id="stock" style="width:250px;height:40px;" class="aida">
            <option value="">選択してください</option>
            <option value="0">0</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
        </select>
        <input type="submit" value="登録" id="post" name="post" class="btn_ao2">
    </form>
</body>
</html>

