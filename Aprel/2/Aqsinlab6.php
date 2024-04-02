<!DOCTYPE html>
<html>
	<head>
		<title>Multiplication Table</title>
	</head>
	<body>
    <table>
<?php

for($x=1 ; $x<=10 ; $x++)
{
echo "<tr>";
for($y=1 ; $y<=10 ; $y++)
{
 $a=$x*$y;
 echo "<td>" . "$a=$x*$y" . "&emsp;";
}
}
?>
</table>
    </body>
	
</html>