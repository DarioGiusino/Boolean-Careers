/* L'utente inserisce un numero di 4 cifre in un input. Calcola la somma di tutte le cifre che compongono il numero e stampala in pagina.
Esempio: l'utente inserisce 1234, noi stampiamo 10. */

// prendo elementi dal dom
const inputField = document.getElementById('numbers');
const button = document.getElementById('button');
const result = document.getElementById('sum');

// aggancio evento al click del button
button.addEventListener('click', function(){
    // prendo valore dell'input
    const userInput = inputField.value;

    // separo il valore in singoli fattori
    const numbers = userInput.split('');
    console.log(numbers);

    // sommo i fattori
    let sum = 0;

    for (let i = 0; i < numbers.length; i++){
        sum += parseInt(numbers[i]);
    }

    // stampo su pagina il risultato
    result.innerText = sum;
});

