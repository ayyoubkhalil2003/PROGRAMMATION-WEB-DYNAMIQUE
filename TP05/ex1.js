
let nombre1 = parseFloat(prompt("Entrez le premier nombre :"));
let nombre2 = parseFloat(prompt("Entrez le deuxième nombre :"));

let somme = nombre1 + nombre2;
let difference = nombre1 - nombre2;
let produit = nombre1 * nombre2;
let division = nombre1 / nombre2;

console.log("Somme : " + somme);
console.log("Différence : " + difference);
console.log("Produit : " + produit);

if (nombre2 !== 0) {
    console.log("La Division : " + division);
} else {
    console.log("Division par zéro impossible !");
}
