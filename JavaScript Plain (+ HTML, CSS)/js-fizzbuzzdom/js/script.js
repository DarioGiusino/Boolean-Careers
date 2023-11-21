/* Steps
1- get element from dom(bonus 1)
2- creare ciclo che generi numeri da 1 a 100
3a- implementare, se numero multiplo di 3, scritta "Fizz" al posto del numero
3b- implementare, se numero multiplo di 5, scritta "Buzz" al posto del numero
3c- implementare, se numero multiplo di 3 *E* 5, scritta "FizzBuzz" al posto del numero
----
*/

const rowContainer = document.querySelector('.row');
// // get element from dom
let numberField = '';

// 2- ciclo 1-100
for (let i = 1; i <= 100; i++){
    // se i multiplo di 3 *E* di 5 stampa fizzbuzz
    if ((i % 3 === 0) && (i % 5 === 0)){
        numberField = numberField + `<div class="col element-box m-2 bg-fizzbuzz">FizzBuzz</div>`;
    } 
    // se i multiplo di 5 stampa buzz
    else if (i % 5 === 0){
        numberField = numberField + `<div class="col element-box m-2 bg-buzz">Buzz</div>`;
    } 
    // se i multiplo di 3 stampa fizz
    else if (i % 3 === 0){
        numberField = numberField + `<div class="col element-box m-2 bg-fizz">Fizz</div>`;
    } 
    // altrimenti stampa il numero
    else {
        numberField = numberField + `<div class="col element-box m-2 bg-number">${i}</div>`;
    }

    console.log(numberField);
}

rowContainer.innerHTML = numberField;