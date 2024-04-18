<?php
session_start();
include 'include.inc';

if ($_SESSION["login"] != "au") {
    header("Location: error.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = htmlspecialchars($_POST['title']);
    $author_name = htmlspecialchars($_POST['author_name']);
    $author_email = htmlspecialchars($_POST['author_email']);
    $abstract = htmlspecialchars($_POST['abstract']);
} else {
    header("Location: author.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>論文詳情</title>
</head>
<body>
    <h1>論文詳情</h1>
    <p><strong>標題:</strong> <?php echo $title; ?></p>
    <p><strong>作者:</strong> <?php echo $author_name; ?></p>
    <p><strong>Email:</strong> <?php echo $author_email; ?></p>
    <p><strong>摘要:</strong> <?php echo $abstract; ?></p>
    <a href="author.php">返回</a>
</body>
</html>
