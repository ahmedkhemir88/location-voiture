<meta charset="utf-8">
<?php
extract($_POST);
mysql_connect("localhost","root","");
mysql_select_db("bac2022");
$TU="TU";
$mat="$T1$TU$T2";
$req="select Imat from voiture where (Imat='$mat')";
$res=mysql_query($req) or die("erreur sql ") ;
if (mysql_num_rows($res)==0) {
	die("Voiture inexistante");
}
$req1="select Imat from voiture where Imat='$mat' AND Disponible='D'";
$res1=mysql_query($req1) or die("erreur sql 1 ") ;
if (mysql_num_rows($res)!=0) {
	die("Attention ! Vérifier le numéro "); 
}

$req3="update  voiture set Disponible='D'  where Imat='$mat'  ";
$res3=mysql_query($req2) or die("erreur sql 3 ") ;
$req2="update  louer set  DateRet='CURDATE()' where Imat='$mat'  ";
$res2=mysql_query($req2) or die("erreur sql 2 ") ;
echo "Retour enregistré avec succès";	

mysql_close();
?>