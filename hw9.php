<html>
<body>
<?php

$conn=mysqli_connect()("localhost","root","larry");

$db=mysql_select_db("stocks");

#$tbl="2017_11_28_18_19_38";

$query="select * from $tbl";


#$rows=mysql_query($query);

//echo mysql_error();


// $cols=mysql_num_fields($rows);
// echo "<table>";
// echo "<tr>";
// for ($col = 0; $col<$cols; $col++){
// 	echo "<th>";
// 	echo mysql_field_name($rows,$col);
// 	echo "</th>";
// 	}
// echo "</tr>";

// while($row=mysql_fetch_array($rows)){
// echo "<tr>";
// for ($col = 0; $col<$cols; $col++){
// 	echo "<td>";
// 	echo $row[$col];
// 	echo "</td>";
// 	}
// echo "</tr>";
// }
// echo "</table>";

<!-- ?> </body>
-->

