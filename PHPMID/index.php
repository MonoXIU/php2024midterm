<?php
session_start();
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <title>高大資管論文投稿系統</title>
</head>
<body>
    <h1>高大資管論文投稿系統</h1> 
    <form action="check.php" method="post"> 
        請選擇您的角色：<select name="role">
            <option value="Chair">Chair</option>
            <option value="Reviewer">Reviewer</option>
            <option value="Author">Author</option>
        </select><br>
        帳號：<input type="text" name="id"><br>
        密碼：<input type="password" name="pwd"><br>
        <input type="submit" value="提交">
    </form>
</body>
</html>