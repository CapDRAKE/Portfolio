function verif_formulaire()
{
  if(document.formulaire.prenom.value == "")  {
   alert("Veuillez entrer votre prénom !");
   document.formulaire.prenom.focus();
   return false;
  }
  if(document.formulaire.nom.value == "")  {
   alert("Veuillez entrer votre nom !");
   document.formulaire.nom.focus();
   return false;
  }
  if(document.formulaire.identifiant.value == "")  {
   alert("Veuillez entrer un identifiant !");
   document.formulaire.identifiant.focus();
   return false;
  } 
  if(document.formulaire.email.value == "") {
   alert("Veuillez entrer une adresse e-mail !");
   document.formulaire.email.focus();
   return false;
  }
  if(document.formulaire.email.value.indexOf('@') == -1) {
   alert("Veuillez entrer une adresse e-mail valide !");
   document.formulaire.email.focus();
   return false;
  }
  if(document.formulaire.mdp.value == "") {
   alert("Veuillez entrer un mot de passe !");
   document.formulaire.mdp.focus();
   return false;
  }
  if(document.formulaire.mdp2.value == "") {
   alert("Veuillez confirmer votre mot de passe !");
   document.formulaire.mdp2.focus();
   return false;
  }
  else{
    if(document.formulaire.mdp2.value != document.formulaire.mdp.value) {
     alert("Les deux mots de passe doivent être identiques !");
     document.formulaire.mdp2.focus();
     return false;
    }
  }
}