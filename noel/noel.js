function formulaire1()
{
	var num = document.forms["formulaire"]["phone"].value;
	var nom = document.forms["formulaire"]["Nom"].value;
	var prenom = document.forms["formulaire"]["Prénom"].value;
	var comptage = 0;
	var result = "";
	if(nom == ''){
		comptage= comptage +1 ;
		result=result+"nom";
	}
	if(prenom == ''){
		comptage = comptage +1;
		result=result+"prenom";
	}
	if(num == ''){
		comptage = comptage +1;;
		result= result+"num";
	}
	if(comptage > 0){
		alert(result);
	}
	else{
		alert("test92");
	}
}