/* Palidroma
Chiedere all’utente di inserire una parola tramiite un form
Creare una funzione per capire se la parola inserita è palindroma */

// ? funzioni
// giro la parola
function reverseWord(word){
    let wordResult = '';

    for (let i = word.length - 1; i >= 0; i--){
        wordResult += word[i];
    }

    return wordResult;
}

// recupero elementi dal dom
const form = document.querySelector('form');
const text = document.getElementById('text');
const result = document.getElementById('result');

// aggancio event al click del form
form.addEventListener('submit', function(event){

    // ! reset comportamento form
    event.preventDefault();

    // recupero valore della parola inserita
    const userWord = text.value.trim();
    // // console.log(userWord);

    // validazione
    if (!isNaN(userWord)){
        alert('Hai inserito un valore non valido, prova ad inserire una parola!');
        return;
    }

    /* una parola è palindroma quando letta al contrario è uguale alla parola di partenza. Quindi se giro la parola e questa esce uguale a quella di partenza allora la parola sarà palindroma. Se invece saranno diverse non lo sarà */

    // constante della parola girata al contrario
    const reversedWord = reverseWord(userWord);
    // // console.log(reversedWord);
    
    // verifico se palindroma
    let isPalindrome = false;

    if (reversedWord === userWord){
        isPalindrome = true;
    }

    // stampo su pagina
    result.innerText = isPalindrome ? 'Sì, la parola è palindroma' : 'No, la parola non è palindroma';

});
