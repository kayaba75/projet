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

// calcul de l'âge de la retraite
function calculerRetraite() {
  const revenuAnnuelMoyen = parseFloat(document.getElementById("revenu_annuel_moyen").value);
  const anneeNaissance = parseFloat(document.getElementById("annee_naissance").value);
  const anneesTravail = parseFloat(document.getElementById("annees_travail").value);

  // Tableau des années de naissance et des durées d'assurance associées
  const anneesAssurance = [
      { annee: 1956, duree: 166 },
      { annee: 1957, duree: 166 },
      { annee: 1958, duree: 167 },
      { annee: 1959, duree: 167 },
      { annee: 1960, duree: 167 },
      { annee: 1961, duree: 168 },
      { annee: 1962, duree: 169 },
      { annee: 1963, duree: 170 },
      { annee: 1964, duree: 171 },
      { annee: 1965, duree: 172 },
      { annee: 1966, duree: 172 },
      { annee: 1967, duree: 172 },
      { annee: 1968, duree: 64 },
      // Ajoutez d'autres années et durées d'assurance ici
  ];

  // Recherche de la durée d'assurance en fonction de l'année de naissance
  let dureeAssurance = 0;
  for (const annee of anneesAssurance) {
      if (annee.annee === anneeNaissance) {
          dureeAssurance = annee.duree;
          break;
      }
  }

  // Formule de calcul de la retraite sans le taux de pension
  const retraite = (revenuAnnuelMoyen * (dureeAssurance / 166)) * (anneesTravail / dureeAssurance);

  // Afficher le résultat
  document.getElementById("resultat").innerHTML = "Le montant de votre pension de retraite est de : " + retraite.toFixed(2) + " euros par an.";
}