<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>


    <?php
    require 'getData.php';
    $p = new getData();
    $postdata = $p->getPostData();
   ?>

        <div class="logowaku"><div class="logo"  style="position:absolute; top:10px; left:10px"><img src="
        http://localhost/LetsEngineer/curriculum/PHPjob/4-2/logo.png" width="180px" height="100px" ></div></div>
        <div class="header1"><div class="center_box">ようこそ <?php echo ($p->getUserData()['last_name']. $p->getUserData()['first_name']);?> さん</div></div>
        <div class="header2"><div class="center_box">最終ログイン日：<?php echo ($p->getUserData()['last_login']); ?></div></div>

        <div class="kizi_naka">
            <div class="kizi_id float"><b>記事ID</b></div>
            <div class="kizi_title float" style="text-align:center"><b>タイトル</b></div>
            <div class="kizi_kategori float" style="text-align:center"><b>カテゴリ</b></div>
            <div class="kizi_honbun float" style="text-align:center"><b>本文</b></div>
            <div class="kizi_toukoubi float" style="text-align:center"><b>投稿日</b></div>

        </div>

            <!--     ID     -->
            <div class="id float">
                    <?php foreach ($postdata as $row) { ?>
                     <div class="kizi_id2">
                     <?php echo $row['id']; ?>
                     </div>
                     <?php } ?>
                     </div>
            <!--     タイトル     -->
                   <?php $postdata = $p->getPostData(); ?>

            <div class="title float">  
                    <?php foreach ($postdata as $row) { ?>
                     <div class="kizi_title2">
                     <?php echo $row['title']; ?>
                     </div>
                     <?php } ?>
                     </div>


            <!--     カテゴリ     -->
                   <?php $postdata = $p->getPostData(); ?>

            <div class="kategori float">  
                    <?php foreach ($postdata as $row) { 
            
                     if ($row['category_no'] === 1) {
                         $category = '食事';
                        }
                    elseif ($row['category_no'] === 2) {
                         $category = '旅行';

                     } else {
                         $category = 'その他';
                        }      
                    ?>

            <div class="kizi_kategori2">
        <?php echo $category; ?>
        </div>
        <?php } ?>
        </div>


             <!--     本文     -->
            <?php $postdata = $p->getPostData(); ?>

             <div class="honbun float">  
             <?php foreach ($postdata as $row) { ?>
             <div class="kizi_honbun2">
             <?php echo $row['comment']; ?>
             </div>
             <?php } ?>
             </div>


             <!--     投稿日     -->
            <?php $postdata = $p->getPostData(); ?>

             <div class="toukoubi float">  
             <?php foreach ($postdata as $row) { ?>
             <div class="kizi_toukoubi2">
             <?php echo $row['created']; ?>
            </div>
             <?php } ?>
            </div>

        

        <div class="footer clearfix"><div class="left_box">Y&I group.inc</div></div>

        </body>
    </html>

