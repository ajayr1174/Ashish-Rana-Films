
<html>
<body>

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$budget = $_POST["budget"];
$fp = fopen("log.txt", "a");
fwrite($fp, $name);
fwrite($fp, $email);
fwrite($fp, $message);
fwrite($fp, $budget);
fclose($fp);
echo '<script language="javascript">';
echo 'alert("Thanks! I will be in touch as soon as possible")';
echo '</script>';
include("index.html");
exit;
?>
