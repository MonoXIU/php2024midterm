<?php
session_start();
include 'include.inc';

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== "re") {
    header("Location: error.php"); 
    exit;
}

$result = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $result = ReSubmission($_POST); 
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>評審結果展示</title>
</head>
<body>
    <h1>評審結果展示</h1>
    <div>
        <?php if ($result) echo $result;?>
    </div>
    <a href="logout.php">Logout</a>
</body>
</html>
