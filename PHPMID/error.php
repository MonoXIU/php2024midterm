<?php
session_start();
?>

<?php ob_start(); ?>

<HTML>
<HEAD>
<TITLE>ERROR</TITLE>
<META charset="utf-8">
    
</HEAD>

    非法進入網頁<br>
    網頁將在三秒後跳轉至登入頁面或<br>
    <a href="index.php">點這邊</a> 
    <?php
        header("Refresh:3;url=index.php")
    ?>
</BODY>
</HTML>

<?php ob_flush(); ?>