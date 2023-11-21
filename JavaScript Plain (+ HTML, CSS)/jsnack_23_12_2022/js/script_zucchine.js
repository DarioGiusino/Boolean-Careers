const zucchine = [
    { varieta: 'Varietà 1', peso: 10, lunghezza: 4 },
    { varieta: 'Varietà 2', peso: 13, lunghezza: 16 },
    { varieta: 'Varietà 3', peso: 4, lunghezza: 23 },
    { varieta: 'Varietà 4', peso: 11, lunghezza: 6 },
    { varieta: 'Varietà 5', peso: 2, lunghezza: 17 },
    { varieta: 'Varietà 6', peso: 5, lunghezza: 10 },
    { varieta: 'Varietà 7', peso: 7, lunghezza: 9 },
    { varieta: 'Varietà 8', peso: 3, lunghezza: 8 },
    { varieta: 'Varietà 9', peso: 6, lunghezza: 27 },
    { varieta: 'Varietà 10', peso: 14, lunghezza: 4 },
  ];

//? --------------------------------- SNACK 1 --------------------------------
/* Crea un array di 10 oggetti che rappresentano una zucchina, indicando per ognuna varietà, peso e lunghezza. Calcola quanto pesano tutte le zucchine. */

// # variante tradizionale
/* let pesoTotale = 0;

zucchine.forEach((zucchina) => {
    pesoTotale += zucchina.peso;
});

console.log(`Il totale del peso delle zucchine è ${pesoTotale}`); */

// # variante reduce
/* const pesoTotale = zucchine.reduce((accumulator, zucchina) => accumulator + zucchina.peso, 0);

console.log(`Il totale del peso delle zucchine è ${pesoTotale}`); */


//? --------------------------------- SNACK 2 --------------------------------
/* Crea 10 oggetti che rappresentano una zucchina.
Dividi in due array separati le zucchine che misurano meno o più di 15cm.
Infine stampa separatamente quanto pesano i due gruppi di zucchine. */

// filtro zucchine per lunghezza
const zucchineLunghe = zucchine.filter(zucchina => zucchina.lunghezza >= 15);
const zucchineCorte = zucchine.filter(zucchina => zucchina.lunghezza < 15);

//calcolo peso di entrambi gli array di zucchine lunghe e corte
const pesoZucchineLunghe = zucchineLunghe.reduce((accumulator, zucchina) => accumulator + zucchina.peso, 0);

const pesoZucchineCorte = zucchineCorte.reduce((accumulator, zucchina) => accumulator + zucchina.peso, 0);

//stampo in console
console.log(`il peso delle zucchine lunghe è ${pesoZucchineLunghe} e il peso delle zucchine corte è ${pesoZucchineCorte}`);

