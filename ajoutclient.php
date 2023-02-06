<meta charset="utf-8">
<?php  
extract($_POST);
mysql_connect("localhost","root","") or die("erreur serveur");
mysql_select_db("bac2022") or die ("erreur base");
$req="select nom from client where (Ncin ='$T1') " ;
$res=mysql_query($req) or die ("erreur sql");
if (mysql_num_rows($res)!= 0) {
	die("<h1>Client existant</h1>")  ;
}
else
$req1="insert into client values('$T1','$T2','$T3','$T4')";
$res1=mysql_query($req1) or die("erreur sql 2");
if (mysql_affected_rows($res1)!= -1) {
	die("<h1>Client ajouté avec succès</h1>");
}
mysql_close();
?>