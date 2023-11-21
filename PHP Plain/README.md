# php-badwords

Questo codice comprende due pagine HTML con uno script PHP per la censura delle parole offensive all'interno di un testo fornito dall'utente attraverso un form.

Pagina 1 - index.php
Presenta un semplice form con due input: uno per l'inserimento del testo e l'altro per specificare la parola da censurare.
L'utente può scrivere un testo e inserire la parola che desidera censurare.
Al clic sul pulsante "Invia", il form invia i dati al file badword.php utilizzando il metodo GET.

Pagina 2 - badword.php
Riceve i dati inviati dal form: il testo originale e la parola da censurare.
Utilizza la funzione str_replace() per sostituire ogni occorrenza della parola da censurare con tre asterischi (\*\*\*) nel testo originale.
Verifica se il testo contiene la parola da censurare tramite str_contains().
Genera un messaggio di output che indica se la parola è stata censurata, mostrando il testo censurato e la sua lunghezza, oppure avverte se il testo non contiene la parola da censurare.

La seconda pagina HTML, visualizza tre sezioni:
Il testo originale fornito dall'utente e la sua lunghezza.
Il testo censurato (o un messaggio che indica l'assenza della parola da censurare) e la sua lunghezza.
La parola inserita dall'utente per la censura.

In generale, questo codice PHP fornisce un modo semplice per censurare una parola specifica all'interno di un testo e mostra il risultato della censura insieme al testo originale e alla parola inserita per la censura.

# php-dischi-json

L'applicazione rappresenta un'applicazione web per la visualizzazione di una collezione di album musicali. È composta da una pagina HTML che utilizza Vue.js per la gestione dinamica dei dati e Axios per richiedere e ricevere i dati relativi agli album da un endpoint API. La pagina visualizza una serie di card, ognuna contenente informazioni riguardanti un album: titolo, autore, anno di uscita e immagine di copertina.

Il file HTML è strutturato con un'intestazione, un corpo principale con un header e un contenitore per le card degli album. È presente anche un modal che potrebbe essere utilizzato per visualizzare informazioni dettagliate su ciascun album.

La pagina utilizza un file di stile CSS interno per la formattazione e l'aspetto delle varie sezioni, con regole specifiche per l'header, le card degli album e il modal.

Lo script JavaScript utilizza Vue.js per creare e montare l'applicazione Vue, recuperando i dati degli album da un endpoint API fornito da PHP. La pagina utilizza anche Axios per effettuare la richiesta HTTP ai dati dell'API.

Il file PHP fornisce i dati degli album in formato JSON utilizzando un database fittizio, leggendo un file JSON preesistente e restituendo i dati al frontend per l'utilizzo nell'applicazione Vue.

# php-hotel

Questa pagina web rappresenta una lista di hotel con filtri di ricerca.

Descrizione dell'applicazione:
Visualizzazione Hotel: Mostra un elenco di hotel con dettagli come il nome, la descrizione, se offrono parcheggio, il voto e la distanza dal centro della città.
Filtri di Ricerca: È presente un form che permette di filtrare gli hotel in base alla presenza di parcheggio e al rating. Gli utenti possono selezionare se desiderano un parcheggio (sì/no) e scegliere un rating da 2 a 5 stelle.
Tabella Hotel: La tabella visualizza i dettagli degli hotel con righe dinamiche generate in base ai dati forniti dall'array in PHP.

L'applicazione consente agli utenti di visualizzare un elenco di hotel e filtrarli in base alle loro preferenze. I dati sono visualizzati in una tabella HTML e il design utilizza il framework Bootstrap per uno stile responsive e moderno.

# php-oop-1

Questo progetto è una semplice applicazione web che utilizza PHP, Vue.js, Axios e Bootstrap per visualizzare una lista di film da un database locale.

Frontend (HTML, Vue.js, Bootstrap):
HTML: Il file HTML fornisce la struttura di base della pagina, definendo i titoli, la lista dei film e le relative informazioni come il titolo del film, il regista, il genere, la lingua e la trama. Utilizza Vue.js per visualizzare i dati ricevuti dal backend.
Vue.js: Gestisce l'interfaccia utente e le interazioni con il backend tramite Axios. Si occupa di recuperare i dati dal backend e renderizzarli dinamicamente nella pagina.

Backend (PHP):
Movie e Genre Class: La classe Movie definisce un oggetto film con proprietà come ID, titolo, regista, lingua, genere e trama. La classe Genre rappresenta il genere del film.
db.php: Contiene le costanti di connessione al database e recupera i dati relativi ai film da un database locale.
index.php: Esegue la query al database per recuperare i film e li restituisce come dati JSON.

Funzionamento:
La pagina HTML utilizza Vue.js per effettuare una richiesta Axios al backend (index.php), che a sua volta esegue una query al database locale per recuperare i dati dei film.
I dati vengono ricevuti come JSON e visualizzati dinamicamente nella pagina web utilizzando Vue.js.

Questo progetto dimostrativo illustra come creare una semplice interfaccia web per visualizzare e interagire con i dati di film memorizzati in un database locale. Utilizzando le tecnologie frontend e backend, offre una panoramica di base su come gestire le richieste e le risposte HTTP per fornire dati dinamici all'utente attraverso una pagina web. La struttura modulare del codice consente una facile comprensione e modifiche future.

# php-oop-2

Questa applicazione PHP e HTML rappresenta uno shop online per prodotti dedicati agli animali domestici. È strutturata utilizzando il linguaggio PHP per definire diverse classi come Product, Food, Kennel, e Toy che rappresentano i vari tipi di prodotti venduti nello shop. Ogni prodotto ha specifiche proprietà come il prezzo, la descrizione, l'immagine e dettagli specifici basati sulla categoria di appartenenza.

Il file principale index.php contiene la struttura HTML per la visualizzazione dei prodotti nel negozio. Utilizza Bootstrap per una presentazione visiva dei prodotti. Il file include un array di istanze di oggetti che rappresentano prodotti, tra cui cibo per gatti, cibo per cani, cucce e giocattoli.

Il negozio mostra i dettagli dei prodotti come immagine, nome, categoria, descrizione e prezzo, utilizzando i dati forniti dalle istanze degli oggetti definite. I dettagli specifici per ciascun tipo di prodotto (come il peso e gli ingredienti per il cibo, le dimensioni e il colore per le cucce, il materiale per i giocattoli) vengono visualizzati in base alla tipologia del prodotto.

La struttura del codice è organizzata in classi e file separati per migliorare la manutenibilità e la chiarezza del codice. È stato utilizzato un approccio OOP (Object-Oriented Programming) per modellare e rappresentare i prodotti in vendita, consentendo una facile estensione e gestione dei dati.

# php-strong-password-generator

Questa applicazione PHP è un generatore di password sicure che consente agli utenti di specificare la lunghezza della password e quali tipi di caratteri includere.

La prima pagina (index.php) visualizza un modulo con campi per la lunghezza della password e checkbox per selezionare caratteri alfanumerici. L'utente può scegliere la lunghezza e quali tipi di caratteri includere nella password. Al submit, i dati vengono inviati tramite metodo GET a se stessa per generare la password. Una volta generata, viene reindirizzato automaticamente alla pagina result.php che mostra la password generata.

La logica principale è gestita dalla funzione random_psw() nel file functions.php, che prende in considerazione la lunghezza della password e i gruppi di caratteri selezionati dall'utente.

La sicurezza della password viene garantita offrendo la possibilità di includere caratteri maiuscoli, minuscoli, numeri e simboli. In caso di valori errati o mancanti, vengono utilizzati valori predefiniti per garantire la generazione della password.
