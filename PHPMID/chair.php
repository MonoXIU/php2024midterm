<?php
session_start();

if($_SESSION["login"]=="ch"){ 
}
else{
    header("Location:error.php");
}

?>

<HTML>
<HEAD>
<TITLE>chair早安，午安，或是晚安阿</TITLE>
<META charset="utf-8">    
</HEAD>

<?php 
    echo $_SESSION["login"];
?>
air  早安，午安，或是晚安阿<br>

<a href="logout.php">logout</a>
</BODY>
</HTML>