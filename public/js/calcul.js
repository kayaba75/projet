// Attacher un écouteur d'événement au bouton
document.getElementById("envoyer").addEventListener("click", function () {
  // Récupérer la valeur de l'élément avec l'ID "salaire"
  var salaire = parseFloat(document.getElementById("salaire").value);
    // Vérifier si le champ de salaire est vide
    if (isNaN(salaire)) {
      document.getElementById('resultat').innerHTML = '<p class="text-warning" style="font-style: italic;"> Veuillez indiquer votre salaire annuel moyen. </p>';
      return;
  }
  // Effectuer le calcul et mettre à jour le contenu de la balise <p> avec le résultat
  var resultatCalcul = (salaire / 12) * 0.5;
  // Utiliser toFixed() pour afficher seulement deux chiffres après la virgule
  var resultatFormate = resultatCalcul.toFixed(2);
  // Ajouter un lien "En savoir plus" vers le site du gouvernement
  var lienEnSavoirPlus =
    '<br> <a href="#" target="_blank" class="text-warning" style="font-style: italic;">En savoir plus sur le calcul de votre retraite</a>';
  document.getElementById("resultat").innerHTML =
    "Résultat : " + resultatFormate + "€ par mois" + lienEnSavoirPlus;
});
