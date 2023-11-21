/* SNACK 1
Il software deve chiedere per 10 volte all’utente di inserire un numero. (qui potete usare un prompt). Il programma stampa la somma di tutti i numeri inseriti. */

// definisco lista da riempire e recupero campo dal dom
const numbers = []
const result = document.getElementById('result');

// chiedo 10 numeri all'utente
for (i = 0; i < 10; i++){
    const userNumber = parseInt(prompt('Inserisci un numero').trim());
    console.log(userNumber);

    // inserisco i numeri nella lista
    numbers.push(userNumber);
}
console.log(numbers);

// sommo i valori nella lista
let sum = 0;

for (i = 0; i < numbers.length; i++){
    sum += numbers[i];
}

// li stampo nel campo del dom
result.innerText = sum;