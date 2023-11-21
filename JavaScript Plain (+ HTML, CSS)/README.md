# js-array-objects-carousel

Questa applicazione rappresenta un carosello dinamico creato in HTML, CSS e JavaScript. Il carosello visualizza un insieme di immagini con i relativi titoli e descrizioni. È stato sviluppato per mostrare un'immagine alla volta, consentendo agli utenti di navigare attraverso le immagini tramite frecce direzionali o cliccando sulle miniature sottostanti.

Il carosello supporta le seguenti funzionalità:
Visualizzazione dinamica delle immagini: Il carosello viene popolato dinamicamente con un array di oggetti letterali contenenti URL delle immagini, titoli e descrizioni associate.
Ciclo infinito: Consente di navigare avanti e indietro tra le immagini, garantendo che dopo l'ultima immagine, il carosello ritorni alla prima e viceversa.
Thumbnail Navigation (BONUS 1): È possibile fare clic sulle miniature delle immagini sottostanti per attivare l'immagine corrispondente nel carosello principale.
Autoplay (BONUS 2): Le immagini si alternano automaticamente ogni 3 secondi, ma è possibile attivare e disattivare questa funzione tramite pulsanti dedicati.

Il codice è organizzato in funzioni per creare le cards e le miniature dinamicamente a partire dall'array di oggetti, mentre gli eventi di click gestiscono la navigazione tra le immagini e l'attivazione dell'autoplay.

# js-biglietto-treno

Quest'applicazione è un calcolatore del prezzo del biglietto del treno basato sull'età dell'utente e sulla distanza da percorrere in chilometri. Attraverso una semplice interfaccia, l'utente inserisce il proprio nome, età e la distanza da viaggiare. Il programma calcola il prezzo del biglietto basandosi su un costo standard per chilometro e applicando sconti del 20% per gli utenti minorenni e del 40% per gli utenti over 65 anni.

Il codice è strutturato in diversi passaggi:
Input utente: Richiesta del nome, dell'età e della distanza da percorrere.
Validazione: Verifica che l'età e la distanza inserite siano numeri validi.
Calcolo del prezzo: Determina il prezzo del biglietto basato sulla distanza inserita moltiplicata per il costo standard per chilometro.
Sconti per età: Se l'utente è minorenne, applica uno sconto del 20%. Se è over 65, applica uno sconto del 40%.
Stampa dei risultati: Visualizza il prezzo finale del biglietto sulla pagina web insieme al nome dell'utente.

# js-biglietto-treno-form

Questa applicazione è un semplice calcolatore del prezzo del biglietto del treno basato sull'età dell'utente e sulla distanza da percorrere in chilometri.

La prima milestone implementa il programma iniziale senza alcuna estetica, usando due input e un pulsante, dove l'utente inserisce l'età e i chilometri da percorrere. Il risultato viene visualizzato sia sulla pagina che nella console del browser.

La seconda milestone amplia l'applicazione, offrendo un'interfaccia più interattiva tramite un form in pagina. L'utente può inserire i propri dati, quali nome, età e chilometraggio, e ottenere il calcolo del prezzo del biglietto in base alle specifiche condizioni di sconto per età.

Il codice è strutturato per gestire diversi casi:
Chiede all'utente l'età e la distanza da percorrere.
Definisce il prezzo al chilometro e gli sconti del 20% per gli utenti minorenni e del 40% per gli utenti over 65.
Esegue il calcolo del prezzo del biglietto in base all'età inserita.
Visualizza i dettagli del biglietto e i dati utente nel form e sulla pagina.
Genera casualmente il numero del vagone e un codice identificativo per il biglietto.

# js-campominato-dom

Questa è una versione di un gioco "Campo Minato" implementato in JavaScript, che permette all'utente di giocare ad un'interfaccia grafica dove deve evitare di calpestare delle "bombe" celate dietro delle celle.

Funzionamento:
Generazione Bombe: Il computer genera casualmente 16 numeri univoci da 1 a 100 (configurabile), corrispondenti alle posizioni delle bombe nascoste.
Interfaccia Utente: L'utente può avviare il gioco cliccando sul pulsante "Play". La griglia viene generata, composta da celle numerate da 1 a 100.
Gioco: Cliccando su una cella, se contiene una bomba, si colora di rosso e la partita termina. In caso contrario, la cella diventa azzurra e il punteggio dell'utente aumenta di uno.
Fine Partita: Se l'utente clicca su tutte le celle tranne quelle con le bombe, raggiungendo il massimo punteggio possibile, il gioco termina e viene visualizzato un messaggio di congratulazioni.

Milestone:
Milestone 1: Preparazione del punteggio dell'utente e gestione del click sulla griglia.
Milestone 2: Generazione di 16 numeri casuali univoci per rappresentare le bombe.
Milestone 3: Controllo se la cella cliccata contiene una bomba o meno.
Milestone 4: Verifica se l'utente ha raggiunto il punteggio massimo e terminazione della partita.
Milestone 5: Determinazione della fine del gioco (se bomba cliccata o punteggio massimo raggiunto) e visualizzazione del risultato sulla pagina.
Bonus:

Implementazione di una select per selezionare tre livelli di difficoltà differenti, ognuno con un numero di celle e di bombe variabile.

# js-campominato-grid

Questo script JS genera una griglia interattiva di 100 celle, suddivise in 10 righe e 10 colonne, all'interno di una pagina HTML. Ogni cella è numerata progressivamente da 1 a 100.

Funzionamento:
Al click su un bottone, viene generata una griglia di 100 celle.
Ogni cella contiene un numero corrispondente alla sua posizione all'interno della griglia.
Cliccando su una cella, il numero relativo ad essa viene stampato nella console e la cella stessa cambia colore diventando azzurra.

Milestone:
Milestone 1: Preparazione dell'HTML e del CSS per ottenere l'aspetto visivo della griglia.
Milestone 2: Generazione delle celle tramite JS al click del bottone "Play".
Milestone 3: Assegnazione progressiva dei numeri da 1 a 100 a ciascuna cella.
Milestone 4: Al click su una cella, il numero corrispondente viene stampato nella console e la cella cambia colore.

Bonus:
Aggiunta di una select per selezionare diversi livelli di difficoltà, modificando il numero totale di celle presenti all'interno della griglia.

# js-fizzbuzzdom

Questo script JavaScript genera una serie di numeri da 1 a 100 e, in base a determinate condizioni, sostituisce questi numeri con le parole "Fizz", "Buzz", o "FizzBuzz" all'interno di una griglia visualizzata su una pagina web.

Funzionamento:
Viene generata una serie di numeri da 1 a 100.
Se un numero è multiplo di 3, viene sostituito con la parola "Fizz".
Se un numero è multiplo di 5, viene sostituito con la parola "Buzz".
Se un numero è sia multiplo di 3 che di 5, viene sostituito con la parola "FizzBuzz".
In caso contrario, viene visualizzato il numero stesso.

Implementazione:
Utilizza un ciclo for per generare numeri da 1 a 100.
Verifica se ciascun numero è multiplo di 3, di 5, o di entrambi, e sostituisce di conseguenza il numero con "Fizz", "Buzz", o "FizzBuzz" rispettivamente.
Mostra il risultato all'interno di una griglia sulla pagina web.

# js-jsnacks-blocco-1

-- jsnack1
Questa applicazione JavaScript chiede all'utente di inserire 10 numeri attraverso finestre di dialogo prompt. Successivamente, calcola la somma di tutti i numeri inseriti e mostra il risultato all'interno del documento HTML.

-- jsnack2
Questa applicazione JavaScript simula un controllo per verificare se un utente può partecipare alla festa del Grande Gatsby. L'utente inserisce il proprio nome tramite un campo di input e, al clic del bottone di verifica, il sistema verifica se il nome è presente nell'elenco dei partecipanti autorizzati. Se il nome corrisponde a uno degli invitati, viene comunicato all'utente che può accedere alla festa; altrimenti, viene indicato che non è stato invitato.

-- jsnack3
Questa applicazione JavaScript calcola la somma delle cifre di un numero a 4 cifre inserito dall'utente tramite un campo di input. Al clic del pulsante di calcolo, il sistema separa il numero in singole cifre e ne calcola la somma, che viene quindi visualizzata nella pagina web.

# js-lista-spesa

Questo semplice script JavaScript visualizza gli elementi di una lista della spesa in una pagina web. Utilizzando un ciclo while, estrae gli elementi uno per uno dalla lista e li visualizza in un formato di elenco puntato all'interno di un tag HTML <ul>. Il risultato viene quindi stampato nella pagina HTML.

# js-mail-dadi

Questa applicazione include due esercizi:

Esercizio 1 - Gioco dei Dadi:
Genera casualmente un numero compreso tra 1 e 6 sia per il giocatore che per il computer. Mostra i due tiri e determina il vincitore in base a chi ottiene il punteggio più alto. I numeri casuali generati vengono visualizzati insieme al risultato del gioco.

Esercizio 2 - Finta Login:
L'utente inserisce la propria email in un form. Il sistema verifica se l'email inserita è presente in una lista di email autorizzate. Se l'email è presente, mostra un messaggio di benvenuto e permette l'accesso al sito; altrimenti, comunica che l'utente non ha i permessi per accedere.

Entrambi gli esercizi sono implementati in JavaScript e HTML utilizzando il DOM per interagire con l'utente.

# js-our-team

Quest'applicazione crea un array di oggetti rappresentanti i membri di un team. Ogni membro ha un nome completo, un ruolo e una foto associata.

Nella MILESTONE 0, viene creato un array di oggetti contenente le informazioni dei membri del team.
Nella MILESTONE 1, le informazioni dei membri del team vengono stampate sulla console, visualizzando il nome completo, il ruolo e il nome del file dell'immagine.
Nella MILESTONE 2, le stesse informazioni vengono visualizzate sul DOM sottoforma di stringhe.

Inoltre, vi sono due bonus:
BONUS 1: La stringa che rappresenta il nome del file dell'immagine viene trasformata in un'immagine effettiva.
BONUS 2: I singoli membri vengono organizzati in card/schede per rendere la pagina più gradevole e visivamente accattivante.

# js-paliedispari

-- palindromo
Il programma chiede all'utente di inserire una parola tramite un form. Quando l'utente invia la parola, viene eseguita una funzione che verifica se la parola inserita è palindroma. Una parola è considerata palindroma se letta al contrario risulta identica alla parola originale.
La funzione controlla la parola inserita dall'utente confrontandola con la sua versione invertita. Se la parola invertita è identica alla parola originale, viene visualizzato un messaggio indicando che la parola è palindroma, altrimenti viene indicato che non lo è.

-- pari_e_dispari
Questa è un'applicazione JavaScript che simula il gioco Pari e Dispari tra un utente e il computer. L'utente sceglie tra pari o dispari e inserisce un numero da 1 a 5 tramite un form.
Il programma genera casualmente un numero (sempre compreso tra 1 e 5) per il computer utilizzando una funzione specifica. Successivamente, somma il numero scelto dall'utente con quello generato casualmente per la CPU.
Una funzione determina se la somma dei due numeri è pari o dispari. Infine, sulla base della scelta (pari o dispari) dell'utente e del risultato della somma, viene dichiarato il vincitore.

# js-pwdgen-wannabe

Questa è un semplice script JavaScript che interagisce con l'utente attraverso tre prompt, chiedendo il nome, il cognome e il colore preferito. Successivamente, utilizza queste informazioni per generare una password sulla pagina web, concatenando insieme nome, cognome, colore preferito e "21". Il risultato viene visualizzato in due parti: una come titolo e l'altra come password nascosta.

# js-simon

Questo codice rappresenta un conto alla rovescia per il Natale utilizzando JavaScript. Sfrutta le timing functions per visualizzare il countdown in tempo reale fino alla mezzanotte del 25 dicembre. Il codice calcola il tempo rimanente in giorni, ore, minuti e secondi, aggiornando dinamicamente l'output ogni secondo. È possibile vedere il conto alla rovescia in una pagina web, mostrando quanto tempo manca fino al Natale.

# js-social-posts

Questo codice genera un feed social dinamico utilizzando JavaScript. È composto da una serie di post, ognuno dei quali contiene informazioni come l'autore, la data, il testo del post, l'immagine e il numero di "Mi Piace".
I post sono rappresentati utilizzando oggetti JS all'interno di un array. Il codice crea una visualizzazione del feed utilizzando le informazioni fornite negli oggetti. Ogni post ha un pulsante "Mi Piace" che, al click, cambia il conteggio dei "Mi Piace" e cambia lo stato del pulsante.
Il codice gestisce l'aggiunta e la rimozione dei "Mi Piace" per ciascun post e visualizza dinamicamente il conteggio aggiornato. Include inoltre la gestione dell'immagine del profilo mancante con un elemento di fallback che contiene le iniziali dell'autore.

# jsnack_14_12_2022

Questo codice in JavaScript mostra due alternative per popolare array2 in base alla lunghezza di array1. In entrambi i casi, l'obiettivo è generare valori casuali e aggiungerli a array2 fino a quando array2 raggiunge la stessa lunghezza di array1.

L'alternativa con while utilizza un ciclo while che continua ad aggiungere valori casuali a array2 finché la sua lunghezza non diventa uguale a quella di array1.

L'alternativa con for utilizza un ciclo for per eseguire lo stesso compito, aggiungendo valori casuali a array2 finché la sua lunghezza non è uguale a quella di array1.

# jsnack_22_12_2022

Questo script in JavaScript crea un array di automobili con diverse proprietà come marca, modello e tipo di alimentazione. Successivamente, le automobili vengono divise in tre array separati in base al tipo di alimentazione: benzina, diesel e tutte le altre alimentazioni.
Viene definito un array cars contenente oggetti che rappresentano diverse automobili con le loro caratteristiche.
Successivamente, vengono utilizzati i metodi filter() per dividere le automobili in tre gruppi:
benzinaCars: contiene solo le auto con alimentazione a benzina.
dieselCars: contiene solo le auto con alimentazione a diesel.
variantCars: contiene le auto con alimentazioni diverse da diesel e benzina.
Infine, vengono stampati separatamente i tre array utilizzando console.log().

# jsnack_23_12_2022

Questo script in JavaScript si occupa di manipolare un array di oggetti che rappresentano zucchine.

Calcolo del peso totale delle zucchine:
Utilizzando sia un approccio tradizionale con un ciclo forEach sia un approccio più compatto con il metodo reduce, viene calcolato il peso totale di tutte le zucchine presenti nell'array.

Separazione delle zucchine per lunghezza:
Le zucchine vengono divise in due gruppi distinti in base alla lunghezza: una lista di zucchine lunghe (lunghezza maggiore o uguale a 15 cm) e una lista di zucchine corte (lunghezza inferiore a 15 cm).

Calcolo del peso per gruppi di zucchine:
Viene calcolato il peso totale per entrambi i gruppi di zucchine lunghe e corte utilizzando il metodo reduce.

Stampa dei risultati:
I pesi totali delle zucchine lunghe e corte vengono stampati nella console.

# snack_vacanze_natalizie

Questo script in JavaScript contiene una serie di funzioni relative a diverse operazioni:

-- JSNACK 1
Funzione per capovolgere stringhe: mirrorText() accetta una stringa come argomento e restituisce la stringa invertita.
-- JSNACK 2
Funzione per unire due array alternando i valori: fuseLists() prende due array e li fonde alternando gli elementi di ciascun array in un unico array.

-- JSNACK 3
Funzione per estrarre numeri da un intervallo di un array: numbersBetween() accetta tre argomenti: un array e due numeri interi (a e b). Restituisce un nuovo array con i valori compresi tra gli indici a e b dell'array fornito.

Il codice è strutturato con vari controlli e interfacce utente tramite il DOM. La pagina HTML contiene campi input e bottoni che, quando attivati, permettono di interagire con le funzioni JavaScript definite. Gli output delle funzioni vengono visualizzati nel DOM della pagina.
