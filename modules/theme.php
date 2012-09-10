<?php 

theme();


function theme() {
global $page;

$q="select theme from page where name='$page'";
$res=mysql_query($q) or mysql_error();
$row=mysql_fetch_assoc($res);

$page_theme=$row['theme'];

require_once("themes/$page_theme/file.php");
}

?>
