<?php
session_start();
ob_start();

if($_SESSION["login"]=="No"){
}
else{
    header("Location:error.php");
}

?>
<HTML>
<HEAD>
<TITLE>FAIL</TITLE>
<META charset="utf-8">   
</HEAD>
<BODY text="black" bgcolor="#B9DBEF">
    <?php 
        echo $_SESSION["login"];
    ?>

    登入失敗<br>
    網頁將在三秒後跳轉至登入頁面或<br>
    <a href="index.php">點這邊</a> 
    <?php
        header("Refresh:3;url=w6.php")
    ?>
</BODY>
</HTML>

<?php ob_flush(); ?>