<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "Multiplication Table";
echo "<table style='border-collapse: collapse' border =\"4\" >";
  for ($i = 0; $i <= 100; $i++){
    echo "<tr>";
    for ($j = 0; $j <= 100; $j++){
    		    //column #s
            if ($i == 0 && $j > 0){
              echo "<td>" . $j . "</td>";
            }
            //row #s
            else if ($j == 0 && $i > 0){
              echo "<td>" . $i . "</td>";
            }
            //Multiplication result
            else if ($i > 0 && $j > 0){
              echo "<td>" . $i * $j . "</td>";
            }
            else{
              echo "<td>  </td>";
            }
    }
    echo "</tr>";
  }
 echo "</table>";
?>
</body>
</html>