function verif_formulaire()
{
  if(document.formulaire.identifiant.value == "")  {
   alert("Veuillez entrer votre identifiant !");
   document.formulaire.identifiant.focus();
   return false;
  } 
  if(document.formulaire.mdp.value == "") {
   alert("Veuillez entrer votre mot de passe !");
   document.formulaire.mdp.focus();
   return false;
  }
 }