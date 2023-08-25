document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registration-form');
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      // Récupérer les valeurs du formulaire et les envoyer au serveur via une requête AJAX
      // ...
    });
  
    const annulerButton = document.getElementById('annuler');
    annulerButton.addEventListener('click', function () {
      form.reset();
    });
  });
  