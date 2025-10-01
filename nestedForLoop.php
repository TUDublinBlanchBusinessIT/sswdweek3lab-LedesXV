<?PHP

echo "<TABLE border = '1'>";
for ($i=1; $i<=15; $i++) {
	echo "<TR>";
	for ($j=1; $j<=20; $j++) {
		echo "<TD>".$i. "," .$j."</TD>";
	}
	echo "</TR>";
}
echo "</TABLE>";
?>