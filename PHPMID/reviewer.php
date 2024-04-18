<?php
session_start();

if($_SESSION["login"]=="re"){  
}
else{
    header("Location:error.php");
}

?>


<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>Reviewer</title>
</head>
<body>
    <h1>Reviewer您好，歡迎進入論文網頁</h1>



    <form action="showreviewer.php" method="post">
        <div>
            <label for="decision">請選擇您的評審決定：</label><br>
            <input type="radio" id="minor_revision" name="decision" value="Minor Revision">
            <label for="minor_revision">Minor Revision</label>
            <input type="radio" id="major_revision" name="decision" value="Major Revision">
            <label for="major_revision">Major Revision</label>
            <input type="radio" id="reject" name="decision" value="Reject">
            <label for="reject">Reject</label>
        </div>
        <div>
            <label for="comments">論文評論評語：</label><br>
            <textarea id="comments" name="comments" rows="10" cols="50"></textarea>
        </div>
        <input type="submit" value="提交評審">
    </form>
    <a href="logout.php">Logout</a>


    <?php
    if (!empty($result)) {
        echo "<p>$result</p>";
    }
    ?>


</body>
</html>
