let nombre = Math.floor(Math.random() * 10) + 1;
let essai;
let tentatives = 0;

while (essai != nombre) {
  essai = prompt("Devine un nombre entre 1 et 10");
  tentatives++;

  if (essai < nombre) {
    alert("C'est plus grand");
  } else if (essai > nombre) {
    alert("C'est plus petit");
  } else {
    alert("Bravo ! Tu as trouvé en " + tentatives + " tentative(s)");
  }
}

