<?php 

main_nav();

/*
this function loads the navigation links for each page
*/
function main_nav() {
	
    global $page;
     $q="select * from main_nav where page='$page' order by weight";
     $res=mysql_query($q) or mysql_error();
     $nr=mysql_num_rows($res);
     
     echo "<div id='content'>
     <div class='main_nav' id='nav'>";
     echo "<ul>";
     for($i=0;$i<$nr;++$i)
     {
	$j=$i+1;     	  
     	  $row=mysql_fetch_assoc($res);
     	 /* echo "<div class='item item$i'>
     	  
     	  <a href='#' class='icon'></a>
        <h2>".$row['name']."</h2>";*/
        echo "<li>";
        echo "<a href='index.php?q=".$row['link']."' class='item".$i."'>".$row['name']."</a>";
        echo "</li>";
           	
     	}
     	echo "</ul></div>";
     	echo "</div>";
     	
     }

?>
