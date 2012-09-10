<?php 

/**
*index file
*/

require_once("core/database.php");

/**
*loading modules
*/

if(isset($_GET['q'])) {
	$page=$_GET['q'];
	$page=mysql_real_escape_string($page);
	$q="select * from page where name='$page'";
   $res=mysql_query($q) or mysql_error();
   $row=mysql_fetch_assoc($res);
   if($row['title']==NULL) {
   	$page='404p';
   	}
  
	}
else {
	$page="home";
	}

require_once('modules/theme.php');
/*
loads the current theme
*/

//require_once('modules/header.php');
/**
*the header of site
*
*should contain all head tags, load jquery...
*it should also have opening body tag
*
*/

$title=gettitle($page);


echo '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> ';

echo '<head>
      <title>'.$title.'</title>
      <script type="text/javascript" src="js/jquery.js"></script>
      
      </head>';
      
echo '<body>';
echo '<div class="page">';
require_once('modules/header.php');
require_once('modules/main_nav.php');
echo '<div id="content">';
require_once('modules/main_con.php');
echo '</div>';

require_once('modules/footer.php');
echo '</div>';
echo '</body>';

/**
*the footer
*
*closing of body and other cells in footer
*
*/