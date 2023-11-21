//# ---------- JSnack festività natalizie ----------

//? ----------- JSNACK 1 -----------
//todo Scrivi una funzione che accetti una stringa come argomento e la ritorni girata (es. Ciao -> oaiC)

//funzione

//funzione che gira interamente il testo e le parole
const mirrorText = (genericText) => {
    //recupero parola data e la trasformo in array
    const textArray = genericText.split('');
    console.log(textArray);

    //la giro con ciclo for partendo dall'ultima lettera
    let reversedText = '';
    for(let i = textArray.length - 1; i >= 0; i--){
        reversedText += textArray[i];
    }

    //restituisco parola girata
    return reversedText;
}

//funzione che gira la parola mantenendo l'ordine delle stesse
const mirrorWord = (genericWord) => {

    //recupero parola data e la trasformo in array
    const wordArray = genericWord.split(' ');
    console.log(wordArray);

    //la giro con ciclo for partendo dall'ultima lettera
    let reversedWord = ''; 
    wordArray.forEach((word) => {
        let parola = '';
        for (let i = word.length - 1; i >= 0; i--){
            parola += word[i];
        };

        reversedWord += `${parola} `;
    });

    //restituisco parola girata
    return reversedWord;
};

//recupero elementi dal dom
const wordField = document.getElementById('text');
const form = document.getElementById('form-text');
const textBox = document.getElementById('text-box');
const mirrorSelect = document.getElementById('turn-select');
const resetBtn = document.getElementById('reset-button');

//aggancio event al click del btn submit nel form
form.addEventListener('submit', (e) => {
    
    //reset del comportamento submit
    e.preventDefault();

    //recupero valore inserito nel campo di testo
    const userWord = wordField.value;

    //! validazione
    if(!isNaN(userWord)){
        alert('inserisci un testo valido');
        return;
    };

    //faccio comparire campo e stampo su pagina
    textBox.classList.remove('d-none');
    if (mirrorSelect.value === 'turn-word'){
        textBox.innerText = mirrorWord(userWord);
    } else {
        textBox.innerText = mirrorText(userWord);
    }
    // // console.log(mirrorWord(userWord));
});

//aggancio event al click del btn di reset
resetBtn.addEventListener('click', () => {
    textBox.classList.add('d-none');
});



//? ----------- JSNACK 2 -----------
//todo Scrivi una funzione che fonda due array (aventi lo stesso numero di elementi) prendendo alternativamente gli elementi da uno e dall'altro es. [a,b,c],[1,2,3] -> [a,1,b,2,c,3]

//creo liste
const firstList = [' Dario', ' Bart', ' Peppe',];
const secondList = [' Perfetto', ' Emotivo', ' Fango'];

//recupero elementi dal dom
const firstListField = document.getElementById('first-list');
const secondListField = document.getElementById('second-list');
const resultListField = document.getElementById('result-list');

const fuseLists = (list1, list2) => {
    
    let resultList = [];

    for (let i = 0; i < list1.length && i < list2.length; i++){
        resultList.push(list1[i]);
        resultList.push(list2[i]);
    }

    return resultList;
};

//stampo su pagina
firstListField.innerText = firstList;
secondListField.innerText = secondList;
resultListField.innerText = fuseLists(firstList, secondList);



//? ----------- JSNACK 3 -----------
//todo Scrivi una unzione che accetti tre argomenti: un array e due numeri (a più piccolo di b e b grande al massimo quanto il numero di elementi dell'array). La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa tra a e b.

//funzioni
const numbersBetween = (a = 0, b = 0, array = []) => {
    let difference = 0;
    for (let i = 1; i < b - 1 && array.length < b && a < b - 1; i++){
        difference = a++ + 1;
        array.push(difference);
    };
    
    return array;
};

//recuper elementi dal dom
const formNumber = document.getElementById('form-number');
const resultNumbers = document.getElementById('result-numbers');
const rstBtn = document.getElementById('reset-number');
const firstNumber = document.getElementById('first-number');
const secondNumber = document.getElementById('second-number');

formNumber.addEventListener('submit', (e) =>{
    
    e.preventDefault();

    const firstUserNumber = firstNumber.value;
    const secondUserNumber = secondNumber.value;

    if(!secondUserNumber || !firstUserNumber){
        alert('inserisci numeri validi');
        return;
    };
    if(secondUserNumber <= firstUserNumber){
        alert('inserisci un numero maggiore a sinistra');
        return;
    };

    resultNumbers.classList.remove('d-none');
    resultNumbers.innerText = numbersBetween(firstUserNumber, secondUserNumber, []);
});

rstBtn.addEventListener('click', () => {
    resultNumbers.classList.add('d-none');
});