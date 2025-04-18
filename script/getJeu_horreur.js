document.querySelectorAll('.game-image').forEach(img => {
    img.addEventListener('click', () => {
      const nomJeu = img.dataset.nom; 
  
      fetch(`../pages/getJeu_horreur.php?nom=${encodeURIComponent(nomJeu)}`)
        .then(response => response.json())
        .then(data => {

          document.getElementById('game-info').innerHTML = `
            <h2>${data.nom}</h2>
            <p>${data.descrip}</p>
          `;
        })
        .catch(err => console.error('Erreur lors du chargement du jeu :', err));
    });
  });
  