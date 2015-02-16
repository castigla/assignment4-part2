<?php
echo "<td><form method=\"POST\" action=\"delete.php\">";
echo "<input type=\"hidden\" name=\"nameid\" value=\"".$row['name']."\">";
echo "<input type=\"submit\" value=\"delete\">";
echo "</form> </td>";
?>