<?php 

$q="select * from article where page='$page' order by weight";
$res=mysql_query($q) or mysql_error();
 $nr=mysql_num_rows($res);
if($nr>0)
{
	require_once('cells/article/style.css');
   
   echo "<div class='article'>";
     
     for($i=0;$i<$nr;++$i)
     {
     	  $row=mysql_fetch_assoc($res);
     	 
     	  
        echo "<div class='article_block'>";
        echo "<div class='article_title'>".$row['article_title']."</div>";
        
        echo "<div class='article_content'>".$row['article_content']."</div>";
        echo "</div>";
           	
     	}
     	
     	echo "</div>";

}
?>