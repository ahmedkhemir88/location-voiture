function verif1() {
	ncin=document.f.T1.value ;
	if (isNaN(ncin)) 
	{
		alert("Vous devez saisir le cin valide"); 
	 	document.f.T1.focus() ; 
	 	return false;
	}
	if (ncin.length != 8 ) 
	{
		alert("Vous devez saisir le cin valide"); 
	 	document.f.T1.focus() ; 
	 	return false;
	}
	nom=document.f.T2.value.toUpperCase();
	if (nom.length< 3) {
		alert("nom non valide"); 
	 	document.f.T2.focus() ; 
	 	return false ; 
	} 
	i=0; 
	while((i<=nom.length)&&(nom.charAt(i)>="A")&&
	 (nom.charAt(i)<="Z")) 
	{ 
	 	i++; 
	} 
	if(i<nom.length) 
	{ 
	 	alert("nom non valide"); 
	 	document.f.T2.focus() ; 
	 	return false ; 
	} 
	prenom=document.f.T3.value.toUpperCase();
	if (prenom.length< 3) {
		alert("prenom non valide"); 
	 	document.f.T3.focus() ; 
	 	return false ; 
	} 
	i=0; 
	while((i<=prenom.length)&&(prenom.charAt(i)>="A")&&
	 (prenom.charAt(i)<="Z")) 
	{ 
	 	i++; 
	} 
	if(i<prenom.length) 
	{ 
	 	alert("prenom non valide"); 
	 	document.f.T3.focus() ; 
	 	return false ; 
	}
	tel=document.f.T4.value ;
	if ((tel.length !=8 )||(tel.charAt(0)== "0")) 
	{
		alert("tel non valide"); 
	 	document.f.T4.focus() ; 
	 	return false ;
	}

}
function verif2() 
{
	serie=document.f.T1.value ;
	if (isNaN(serie)||(serie.length != 3)) 
	{
		alert("n° serie non valide"); 
	 	document.f.T1.focus() ; 
	 	return false ;
	}
	enreg=document.f.T2.value ;
	if (isNaN(enreg)||(Number(enreg)<1)||(Number(enreg)>9999)) 
	{
		alert("n° enreg non valide"); 
	 	document.f.T2.focus() ; 
	 	return false ;
	}

}