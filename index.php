<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="verdana"><b>id</b></font></td>
<td><font face="verdana"><b>nombre</b></font></td>
<td><font face="verdana"><b>edad</b></font></td>
<td><font face="verdana"><b>domicilio</b></font></td>
</tr>

<?php  
  $link = @mysql_connect("sql3.freesqldatabase.com", "sql3491676","duECSk3eWv")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("sql3491676", $link)
      or die ("Error al conectar a la base de datos.");

  $query = "SELECT * FROM usuario";
  $result = mysql_query($query);
  $numero = 0;
  while($row = mysql_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">".$row["id"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" .$row["nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" .$row["edad"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" .$row["domicilio"]. "</font></td></tr>";    
    $numero++;
  }
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Número: " . $numero . 
      "</b></font></td></tr>";
  
  mysql_free_result($result);
  mysql_close($link);
?>
</table>