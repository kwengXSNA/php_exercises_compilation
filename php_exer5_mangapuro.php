<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
   <table width="300px" cellspacing="0.3px" cellpadding="0.3px" border="1.5px">
   
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=35px; width=50px; bgcolor=white></td>";
          }
		  else
		  {
          echo "<td height=35px; width=50px; bgcolor=black></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>