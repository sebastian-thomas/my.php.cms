<?php 
/*
This file creates the connect to the database with the configurations
stored in the config.php file. If the database does not exist then the
new database is created.
*/	

	require_once("config.php");

	$result = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	$database = DB_NAME;
	@mysql_select_db($database) or die( "Unable to select database. Please see if the database exists");
	

 /*functions*/
 
 function getpid($p) {
 	$q="select pid from page where name='$p'";
   $res=mysql_query($q) or mysql_error();
   $row=mysql_fetch_assoc($res);
   return $row['pid'];
}
 	
 	 function gettitle($p) {
 	$q="select title from page where name='$p'";
   $res=mysql_query($q) or mysql_error();
   $row=mysql_fetch_assoc($res);
   return $row['title'];
}

?>
