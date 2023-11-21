/*
L'utente clicca su un bottone che genererà una griglia di gioco quadrata.
Ogni cella ha un numero progressivo, da 1 a 100.
Ci saranno quindi 10 caselle per ognuna delle 10 righe.
Quando l'utente clicca su ogni cella, la cella cliccata si colora di azzurro ed emetto un messaggio in console con il numero della cella cliccata.
#MILESTONE 1
Prepariamo l'HTML ed il CSS per ottenere il risultato grafico che vediamo nell'immagine allegata.
#MILESTONE 2
Rimuoviamo le celle che abbiamo inserito nell'HTML in modo da generarle tramite JS. Al click del bottone play, vengono generate 100 celle in 10 righe da 10 celle ciascuna.
#MILESTONE 3
In ogni cella, deve comparire il numero corrispondente, in ordine da 1 a 100;
#MILESTONE 4
Al click sulla cella, stampiamo il numero della cella cliccata in console, poi coloriamo la cella d'azzurro!
# BONUS
Aggiungere una select accanto al bottone di generazione, che fornisca una scelta tra tre diversi livelli di difficoltà:
- con difficoltà 1 => 100 caselle, con un numero compreso tra 1 e 100, divise in 10 caselle per 10 righe;
- con difficoltà 2 => 81 caselle, con un numero compreso tra 1 e 81, divise in 9 caselle per 9 righe;
- con difficoltà 3 => 49 caselle, con un numero compreso tra 1 e 49, divise in 7 caselle per 7 righe;
Note:
- questo bonus richiederà una riflessione extra per quel che riguarda il calcolo della larghezza delle celle ;)
*/

// # FUNZIONI ------------------------
// creare una singola cella
function createCell(content) {
    const cell = document.createElement('div');
    cell.classList.add('cell');
    cell.append(content)
    return cell;
}

// # FASE PRELIMINARE ------------------------
// recupero elementi dal DOM
const button = document.getElementById('play');
const grid = document.getElementById('grid');
const titleElement = document.getElementById('starting-title');

// valori iniziali
const rows = 10;
const cols = 10;
const totalCells = rows * cols;

// # AVVIO LOGICA
// al click del bottone play
button.addEventListener('click', function(event){
    // pulisco griglia
    grid.innerHTML='';

    // cambio testo al button
    event.target.innerText = 'Restart';
    
    // per il totale delle celle...
    for (let i = 1; i <= totalCells; i++){
        // creo tot celle
        const cell = createCell(i);
        // aggiungo classe al click e stampo in console numero relativo
        cell.addEventListener('click', function(){
            cell.classList.toggle('clicked');
            console.log(i);
        });
        // inserisco in griglia
        grid.appendChild(cell);
    }

});