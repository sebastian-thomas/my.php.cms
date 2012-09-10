<?php 

main_con();

/*
this function loads the navigation links for each page
*/

function main_con() {
	
    global $page;
     $q="select * from cells where page='$page' order by weight";
     $res=mysql_query($q) or mysql_error();
     $nr=mysql_num_rows($res);
     
     echo "<div class='main_con'>";
   /*to load all contents in this current page*/
     for($i=0;$i<$nr;++$i)
     {
     	  $row=mysql_fetch_assoc($res);
        $path=$row['name'];
        require_once("cells/$path/file.php");
           	
     	}
     	
     	echo "</div>";
     	
     }
     

?>
