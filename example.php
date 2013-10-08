<html> 
<head> 
   <title>Ejemplo de PHP</title> 
</head> 
<body>

<?php 
 $var="texto"; 
   $num=3; 
   printf("Puede fácimente intercalar <b>%s</b> con números <b>%d</b> <br>",$var,$num); 
    
   printf("<TABLE BORDER=1 CELLPADDING=20>"); 
   for ($i=0;$i<10;$i++) 
   { 
      printf("<tr><td>%10.d</td></tr>",$i); 
   } 
   printf("</table>"); 
   
   $firstname = 'fred';
   $lastname  = 'fox';
   $query = sprintf("SELECT firstname, lastname, address, age FROM friends 
    WHERE firstname='%s' AND lastname='%s'",
    mysql_real_escape_string($firstname),
    mysql_real_escape_string($lastname));
	echo $query;

?>


</body> 
</html>