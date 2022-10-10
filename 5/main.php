<?php

require_once('pdo.php');
require_once('function.php');

//ログインしてるかチェック
check_user_logged_in();

$pdo = connect();

try {
    // データしゅとく
    $sql = "SELECT * FROM books";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
} catch(PDOException $e) {
    echo 'Error: '. $e->getMessage();
    die();
}


?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メインページ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>在庫一覧画面</h1>
    <div class="flex">
    <a href="create_book.php" class="btn_ao">新規登録</a>
    <a href="logout.php" class="btn_gray">ログアウト</a>
    </div>
    <table>
        <tr>
            <th>タイトル</th>
            <th>発売日</th>
            <th>在庫数</th>
            <th></th>
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo date('Y/m/d', strtotime($row['date'])); ?></td>
                <td><?php echo $row['stock'] ?></td>
                <td><a href="delete_book.php?id=<?php echo $row['id']; ?>" class="btn_red">削除</a></td>
            </tr>
       <?php } ?>
    </table>

</body>
</html>
