<?php
session_start();

if($_SESSION["login"]=="au"){ }
else{
    header("Location:error.php");
}
include 'include.inc'; 
$result = []; 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $result = AuSubmission($_POST);
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>Author</title>
</head>
<body>
    <h1>Author您好，歡迎進入論文投稿網頁</h1>

    <form action="showpapper.php" method="post"> 
        論文標題：<input type="text" name="title" required><br>
        作者姓名：<input type="text" name="author_name" required><br>
        作者Email：<input type="email" name="author_email" required><br>
        論文摘要：<textarea name="abstract" rows="5" cols="50" required></textarea><br>
        <input type="submit" value="提交論文">
    </form>
    <a href="logout.php">Logout</a><br>

    <?php
    ?>

</body>
</html>