# laravel-api

Questa è un'applicazione web basata su Laravel, un framework PHP. L'applicazione gestisce progetti, tipologie (types), e tecnologie (technologies) per un portfolio online.

Le migrazioni nel codice definiscono la struttura del database, mentre i file delle route definiscono i percorsi per l'API e le pagine. La gestione dei progetti è inclusa tramite il ProjectController e ci sono anche controller per Type e Technology che consentono la gestione delle tipologie e delle tecnologie associate ai progetti. Ogni controller gestisce le operazioni CRUD (create, read, update, delete) dei rispettivi oggetti.

Il frontend utilizza HTML, CSS e Blade (il motore di template di Laravel) per la struttura delle pagine. L'applicazione fornisce un'interfaccia per gestire i progetti, le tipologie e le tecnologie, insieme a funzionalità per l'autenticazione degli utenti.

È presente anche un sistema di seeding del database (DatabaseSeeder) per popolare il database con dati di esempio. Le migrazioni definite inizialmente creano le tabelle necessarie nel database, mentre i seeder popolano tali tabelle con dati di esempio.

# laravel-auth

L'applicazione è una piattaforma di gestione progetti sviluppata in Laravel, che consente agli utenti di creare, modificare e cancellare progetti. Include funzionalità per la gestione del profilo utente, con ruoli distinti per l'area admin e l'area guest. L'interfaccia utente è costruita utilizzando Bootstrap per garantire un'esperienza utente coerente e piacevole.

Il repository include migrazioni per la struttura del database, seeders per generare dati di esempio e rotte per le diverse funzionalità dell'applicazione. Le funzionalità sono completate da un'interfaccia utente intuitiva e reattiva che offre notifiche immediate all'utente durante le azioni.

# laravel-boolean

Questa applicazione rappresenta un sistema di gestione di uova, permettendo agli utenti autorizzati l'aggiunta, visualizzazione, modifica ed eliminazione di dati relativi alle uova in un ambiente back-office.

Caratteristiche principali:
Modello Egg: Rappresenta i dati di un uovo, con attributi come colore del pacchetto, sorpresa contenuta, tipo di cioccolato e dimensione.
EggController: Gestisce le operazioni CRUD (Create, Read, Update, Delete) relative agli oggetti Egg nel database.
Migrazione e Seeder: Creazione della tabella 'eggs' nel database con i relativi campi. Il seeder popola la tabella con dati di esempio.
Route Definiti: Definisce le rotte per accedere alle varie funzionalità del back-office delle uova.
Interfaccia Grafica (HTML e Blade Templating): Utilizza Bootstrap per la struttura di base dell'interfaccia utente con le tabelle per la visualizzazione dei dati delle uova. Include anche un header con navigazione per il back-office.

Funzionalità:
Visualizzazione: Mostra una tabella con i dettagli di ogni uovo.
Aggiunta: Consente l'inserimento di nuovi dati di uova attraverso un form dedicato.
Modifica ed Eliminazione: Permette di modificare e cancellare dati esistenti delle uova.
Navigazione: Include una barra di navigazione per accedere alle varie sezioni del back-office.

Struttura dell'applicazione:
Controller: Gestisce le richieste dell'utente e le azioni sulle uova nel database.
Model: Rappresenta e interagisce con i dati delle uova nel database.
Migrazioni e Seeder: Creano la struttura del database e lo popolano con dati iniziali.
Route: Collegano le richieste URL dell'utente alle azioni appropriate nei controller.
Interfaccia Grafica: Presenta all'utente una vista per interagire con i dati delle uova.

# laravel-comics

Questa applicazione contiene il codice per la struttura base di una pagina web relativa a un sito sui fumetti della DC Comics. La pagina è organizzata in diverse sezioni come header, main, footer e altre sezioni specifiche per visualizzare contenuti relativi ai fumetti e collegamenti utili.

Header: Mostra il logo della DC Comics, un menu di navigazione e un campo di ricerca.
Main: Presenta una sezione per visualizzare le card dei fumetti attuali con immagini e prezzi, e un pulsante "load more" per caricare ulteriori contenuti.
Footer: Suddivide i contenuti in sezioni con link relativi a DC Comics, lo shop, termini d'uso, politiche sulla privacy e altri siti affiliati.
Nav: Mostra un elenco di collegamenti ad altre sezioni del sito come Digital Comics, DC Merchandise, Subscription, Comic Shop Locator e DC Power Visa.

Oltre al layout di base, il file HTML utilizza il sistema di templating di Blade per includere altre viste (come header, merch, e altre parti comuni) e per iterare sui dati dei fumetti per visualizzarli nella sezione principale della pagina.

La pagina fa uso di Vite.js per l'integrazione di JavaScript e della libreria Font Awesome per icone e stili. Le immagini sono caricate utilizzando Vite per la gestione delle risorse.

# laravel-dc-comics

Questo repository contiene un'applicazione web sviluppata con Laravel, che gestisce un catalogo relativo ai fumetti della DC Comics permettendo agli utenti di visualizzare, aggiungere, modificare ed eliminare informazioni su ogni fumetto presente nel database.

Caratteristiche Principali:
Gestione Comics: L'applicazione permette agli utenti di visualizzare l'elenco dei fumetti disponibili, aggiungere nuovi fumetti, visualizzare dettagli specifici di un fumetto, modificarne i dati esistenti e eliminare fumetti dal database.
Validazione dei dati: Sono state implementate regole di validazione dei dati sia per l'aggiunta che per la modifica dei fumetti. Le regole assicurano che i dati inseriti siano corretti e coerenti con le specifiche richieste.
Interfaccia Utente Responsive: La pagina è progettata per adattarsi a diversi dispositivi, offrendo una buona esperienza utente su desktop, tablet e dispositivi mobili.

# laravel-general-crud

Quest'applicazione Laravel gestisce una collezione di strumenti software, offrendo funzionalità CRUD (Create, Read, Update, Delete) per gli strumenti. Gli utenti possono visualizzare una lista di strumenti, accedere ai dettagli di ciascuno, modificarli e eliminarli. Le informazioni sugli strumenti sono memorizzate in un database e visualizzate in modo dinamico nelle viste. L'applicazione utilizza il sistema di template Blade di Laravel per generare le viste e organizzare il layout delle pagine.

# laravel-many-to-many

Questo progetto Laravel implementa un sistema di gestione di progetti con una relazione "many-to-many" tra progetti e tecnologie. La relazione viene gestita attraverso una tabella pivot "project_technology" che collega i progetti alle tecnologie associate ad essi.

Le migrazioni definite nel codice creano quattro tabelle nel database:
projects: contiene informazioni sui progetti come titolo, descrizione, immagine, collegamento al repository e altri dettagli.
types: rappresenta i tipi di progetti con attributi come etichetta e colore.
technologies: archivia le informazioni sulle tecnologie con etichetta e colore.
project_technology: questa tabella pivot gestisce la relazione "many-to-many" tra progetti e tecnologie, collegando i progetti alle tecnologie associate ad essi.

Sono presenti anche dei seeder per popolare il database con dati predefiniti e dei controller per gestire le operazioni CRUD (create, read, update, delete) per progetti, tecnologie e tipi di progetti.

La parte più rilevante è la gestione della relazione many-to-many tra progetti e tecnologie attraverso i modelli Eloquent Project e Technology, che utilizzano il metodo belongsToMany() per stabilire questa relazione.

Il progetto fornisce un'interfaccia per visualizzare, aggiungere, modificare e eliminare progetti, tecnologie e tipi di progetti, consentendo agli utenti di gestire le associazioni tra progetti e tecnologie attraverso una relazione flessibile e dinamica.

# laravel-migration-seeder

Questa applicazione rappresenta un esempio di utilizzo di Laravel per gestire le migrazioni e i seeder all'interno di un progetto. In particolare, si focalizza sulla gestione dei dati relativi ai treni all'interno di un database.

Le migrazioni sono utilizzate per definire la struttura del database. Nel file di migrazione per la tabella dei treni, vengono definite le colonne della tabella (id, company, departure_station, arrival_station, departure_time, arrival_time, train_code, carriages_number, in_time, is_cancelled) con i rispettivi tipi di dato e restrizioni.

Il seeder (TrainSeeder) è responsabile di riempire il database con dati fittizi. In questo caso, vengono generati 10 treni fittizi utilizzando la libreria Faker per popolare i campi della tabella trains con valori casuali.

Il file DatabaseSeeder rappresenta il punto di ingresso principale per l'esecuzione dei seeder. All'interno di questo file, si chiama il seeder specifico (TrainSeeder) per popolare effettivamente il database con i dati fittizi.

Il modello Train rappresenta un'istanza del modello Eloquent, il quale è collegato alla tabella trains nel database. Questo modello permette di interagire con i dati della tabella tramite metodi e relazioni definite all'interno del modello stesso.

# laravel-model-controller

Questa applicazione utilizza il framework Laravel per gestire una lista di film attraverso Model e Controller.

Model: Movie
La classe Movie estende la classe Model, che rappresenta il modello di un film nel database. Utilizza il trait HasFactory per facilitare la creazione delle istanze del modello.

Controller: PageController
Il PageController è responsabile di gestire le richieste relative alle pagine dell'applicazione. La funzione home() restituisce la vista 'home' e passa un elenco di film ottenuti dal database alla vista come variabile compatta chiamata 'movies'.

La route principale '/' è collegata alla funzione 'home' del PageController, consentendo agli utenti di accedere alla pagina principale dell'applicazione.

La vista 'home.blade.php' visualizza i dettagli dei film attraverso un ciclo @foreach che itera attraverso la variabile 'movies' passata dal controller. Ogni film viene visualizzato come una card che mostra il titolo, il titolo originale, la nazionalità, la data di rilascio e il voto.

Il Model Movie rappresenta la struttura dei dati dei film nel database, mentre il Controller PageController gestisce la logica di business e fornisce i dati necessari alla vista. L'applicazione utilizza il modello MVC (Model-View-Controller) per organizzare la logica dietro i dati, la presentazione e la gestione delle richieste utente.

# laravel-one-to-many

Questa applicazione basata su Laravel gestisce una relazione one-to-many tra due entità: Type e Project. La relazione one-to-many è implementata utilizzando i modelli Eloquent forniti dal framework.

Type: Questa entità rappresenta i tipi di progetto, con le seguenti proprietà: label (etichetta del tipo) e color (colore associato).
Project: Questa entità rappresenta i progetti, con proprietà come title, description, image, repo_link, e is_published. Inoltre, ha una relazione con l'entità Type, in quanto un progetto può essere associato a un tipo.

Il controller ProjectController gestisce le operazioni CRUD (Create, Read, Update, Delete) relative ai progetti, mentre il controller TypeController si occupa delle operazioni simili relative ai tipi di progetto. Inoltre, entrambi i controller permettono la gestione delle relazioni tra le entità.

La relazione one-to-many è implementata tramite il metodo Eloquent belongsTo nel modello Project, che stabilisce che un progetto appartiene a un singolo tipo, e il metodo hasMany nel modello Type, che indica che un tipo può avere molti progetti associati.

La funzione index del ProjectController fornisce una vista con elenco dei progetti, permettendo di filtrarli per status e tipo. Questa vista mostra i progetti associati a ciascun tipo, utilizzando la relazione one-to-many per recuperare i progetti associati a un determinato tipo.

# laravel-primi-passi

Questo progetto rappresenta un'introduzione iniziale all'utilizzo del framework Laravel. È composto da due pagine web collegate tra loro tramite due route definite nel file web.php.

La prima route, '/', restituisce una vista chiamata 'home' che contiene un semplice testo "hello world" e un link che reindirizza alla seconda pagina ('second').

La seconda route, '/second', restituisce una vista chiamata 'second' che mostra un testo "hello earth" e un link che reindirizza alla prima pagina ('first').

Le viste ('home.blade.php' e 'second.blade.php') sono pagine HTML di base con titoli diversi ('Laravel Primi Passi' e 'Laravel Secondi Passi' rispettivamente) e testi semplici.

Questo progetto dimostra come definire rotte in Laravel utilizzando il metodo Route::get(), collegando diverse viste tra loro.

# laravel-vue-comp

Questa applicazione è un backend scritto in PHP utilizzando il framework Laravel. È stato sviluppato per gestire operazioni CRUD (Create, Read, Update, Delete) su tre entità principali: Editor, Game, e Genre.

La classe GameController contiene metodi per gestire le operazioni relative al modello Game, inclusi metodi per visualizzare una lista di giochi, creare, visualizzare, aggiornare ed eliminare singoli giochi, oltre a recuperare i giochi associati a un determinato editor.

Il modello Game ha diverse funzioni per ottenere informazioni specifiche come la data di aggiornamento formattata, un estratto della descrizione del gioco e relazioni con altri modelli come Editor e Genre.

Il modello Editor gestisce l'entità degli editori dei giochi e ha una relazione con il modello Game.

Il modello Genre rappresenta i generi dei giochi e ha una relazione molti a molti con il modello Game.

L'applicazione è strutturata per fornire API JSON. Le rotte definite nel GameController consentono al frontend di interagire con il backend per ottenere dati sui giochi, sugli editori e sui generi, oltre a consentire operazioni CRUD sui giochi.
