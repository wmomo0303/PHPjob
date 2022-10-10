<?php


define('DB_DATABASE', '5_book');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);




/**
 * DBの接続設定をしたPDOインスタンスを返却する
 * @return object
 */

function connect() {
    try {

        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }

}

