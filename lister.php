<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php  
mysql_connect("localhost","root","") or die("erreur serveur");
mysql_select_db("bac2022") or die(" <h2> erreur base </h2> ");
$req="select Imat ,Model,PrixLoc from voiture where (disponible='D') ";
$res=mysql_query($req) or die(" <h2> erreur sql </h2> ");
echo "<table border='1'>
		<tr>
		<th>Matricule voiture </th>
		<th>Modèle Voiture </th>
		<th>Prix de location </th>
		</tr>";
while (($ligne= mysql_fetch_array($res))) 
{
	echo "
	<tr>
		<td>$ligne[0]</td>
		<td>$ligne[1]</td>
		<td>$ligne[2]</td>
	</tr>";
}
echo "</table>";

mysql_close();
?>

</body>
</html>