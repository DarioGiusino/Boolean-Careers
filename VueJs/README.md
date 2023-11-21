# vite-boolflix

Questa applicazione è una replica di Netflix, denominata "Boolflix". È un'applicazione web sviluppata con il framework Vue.js.

La pagina principale, divisa in due componenti principali (AppHeader e AppMain), consente agli utenti di cercare film e serie TV tramite una barra di ricerca.

Il componente AppHeader contiene il titolo dell'applicazione, Boolflix, e una barra di ricerca dinamica che consente agli utenti di inserire il nome del film o della serie TV desiderato. Quando l'utente digita nella barra di ricerca, vengono inviati due segnali: uno per eseguire la ricerca (search-programs) e l'altro per aggiornare la parola cercata (writing-word).

Il componente AppMain visualizza i risultati della ricerca, mostrando le card dei film e delle serie TV corrispondenti ai risultati della ricerca. Ogni card presenta una foto del film o della serie TV, il titolo, il titolo originale, la lingua, la valutazione, la descrizione e, se disponibile, la bandiera del paese della lingua originale.

Il repository contiene anche diversi file aggiuntivi, come i file dei componenti Vue.js, gli stili CSS, il file di configurazione e i dati statici necessari per eseguire le richieste API tramite Axios. L'applicazione si basa sull'API di The Movie Database (TMDb) per ottenere informazioni sui film e sulle serie TV.

Il design e l'interfaccia grafica si ispirano a Netflix, progettati per offrire una navigazione intuitiva e una presentazione accattivante dei risultati di ricerca, riprendendo il layout e lo stile dell'interfaccia utente di Netflix.

# vite-boolfolio

Questo progetto è un'applicazione web che utilizza Vue.js per implementare la paginazione dinamica dei contenuti. È strutturato come una Single Page Application (SPA) che include più pagine e componenti per visualizzare una lista di progetti.

Struttura del progetto:
La navigazione è gestita tramite Vue Router, con una barra di navigazione (AppNavbar) che permette di spostarsi tra le varie sezioni dell'applicazione.
La pagina principale (HomePage) visualizza una lista di progetti utilizzando la paginazione. Vengono mostrati alcuni progetti per pagina, con un componente di paginazione (AppPagination) che permette di passare da una pagina all'altra.
La pagina di dettaglio del progetto (ProjectDetailPage) mostra i dettagli di un singolo progetto quando l'utente clicca sul link per aprire un progetto specifico dalla lista.
La pagina di errore 404 (Error404Page) viene mostrata quando viene richiesta una pagina non esistente.

Funzionalità principali:
La pagina principale (HomePage) recupera la lista dei progetti dall'API tramite chiamate HTTP utilizzando Axios. Mostra la lista dei progetti con la possibilità di navigare tra le varie pagine.
La pagina di dettaglio del progetto (ProjectDetailPage) recupera e visualizza i dettagli di un progetto specifico.
L'applicazione gestisce anche eventuali errori, reindirizzando l'utente alla pagina di errore 404 se una pagina non è trovata.

Il codice è strutturato in componenti riutilizzabili, gestisce le chiamate API per recuperare i dati e offre una navigazione fluida tra le pagine grazie all'implementazione della paginazione dinamica di Vue.js.

# vite-breaking-bad

Questo repository contiene una applicazione web Pokedex sviluppata in Vue.js, che si connette a un'API remota per recuperare e visualizzare informazioni sui Pokemon. L'applicazione offre funzionalità di filtraggio dei Pokemon per tipo e nome, con una paginazione dei risultati.

Componenti Principali:
PokeList.vue: Contiene la logica principale per la visualizzazione e il filtraggio dei Pokemon. Utilizza filtri per tipo e nome per recuperare dati dall'API e mostra i risultati paginati.
PokeCard.vue: Rappresenta la singola card di un Pokemon, mostrando dettagli come nome, tipo, statistiche e immagine.
SelectFilter.vue: Componente per filtrare i Pokemon per tipo.
TextFilter.vue: Componente per filtrare i Pokemon per nome.
AppLoader.vue: Visualizza un indicatore di caricamento quando i dati vengono recuperati dall'API.

Struttura del Codice:
Il file principale è App.vue che organizza il layout dell'applicazione.
Viene utilizzato axios per effettuare le richieste API per recuperare i dati dei Pokemon.
Il file store.js contiene uno stato globale store utilizzato per memorizzare i dati recuperati dall'API e gestire lo stato di caricamento.
Il codice è strutturato utilizzando i concetti di reactive programming di Vue.js, come le reattività dei dati tramite reactive e l'emissione degli eventi per comunicare tra i componenti.

L'applicazione è progettata per essere interattiva, permettendo agli utenti di filtrare e visualizzare informazioni specifiche sui Pokemon. La struttura modulare dei componenti facilita la manutenzione e l'aggiunta di nuove funzionalità.

# vite-comics

Questo repository contiene una web app dedicata ai fumetti DC Comics. L'applicazione è stata sviluppata utilizzando Vue.js per la gestione della parte front-end, offrendo agli utenti un'esperienza coinvolgente nella visualizzazione e nell'esplorazione delle serie di fumetti DC.

Funzionalità Principali:
Visualizzazione dei Fumetti: Mostra una serie di card che presentano le informazioni sui fumetti, tra cui immagine della copertina, prezzo, serie e tipo.
Navigazione Chiara: L'header offre un sistema di navigazione intuitivo per esplorare diverse sezioni, come Personaggi, Fumetti, Film, Serie TV, e altro.
Footer Informativo: Il footer fornisce accesso rapido a informazioni e collegamenti relativi ai fumetti DC Comics, come i negozi di fumetti, la sottoscrizione, e altro ancora.

# vite-hello-world

Questo codice rappresenta una semplice applicazione Vue.js utilizzando la Options API, focalizzandosi sull'importazione di componenti e sulla manipolazione dei dati. L'applicazione include tre componenti principali:

AppTitle.vue: Visualizza un titolo nella pagina.
AppHero.vue: Mostra un'immagine di intestazione con il metodo buildUrlImage per costruire il percorso dell'immagine a partire dal nome del file fornito.
App.vue: Aggrega e utilizza i componenti AppTitle e AppHero, definendo anche un dato (pic) che rappresenta il nome del file dell'immagine da visualizzare.

La struttura è semplice e dimostra l'uso della Options API in Vue.js. Ogni componente è organizzato in un file .vue separato, seguendo le pratiche consigliate per la suddivisione del codice Vue.

# vue-boolzapp

Boolzap è un'applicazione web che replica alcune funzionalità di WhatsApp, sviluppata utilizzando Vue.js tramite CDN. Questa replica presenta una struttura simile a WhatsApp, consentendo agli utenti di chattare con i contatti, inviare e ricevere messaggi, e gestire le conversazioni.

Funzionalità Principali:
Chat e Contatti: L'app consente agli utenti di visualizzare una lista di contatti, selezionare una chat specifica e interagire con i messaggi.
Messaggi: Gli utenti possono inviare e ricevere messaggi, che vengono visualizzati con data e ora di invio, identificati come inviati o ricevuti.
Aggiunta di Contatti: È possibile aggiungere nuovi contatti, consentendo agli utenti di espandere la lista dei destinatari delle conversazioni.

Stack Tecnologico:
Vue.js: Utilizzato come framework principale per la creazione dell'interfaccia utente e la gestione delle interazioni.
Luxon: Libreria per la manipolazione delle date e delle ore all'interno dell'applicazione.
Bootstrap: Utilizzato per lo stile e la struttura generale dell'interfaccia utente.
Bootstrap Icons: Icone utilizzate per diversi componenti dell'applicazione.

Scopo dell'App:
Boolzap è un progetto dimostrativo che illustra come Vue.js può essere utilizzato per sviluppare un'applicazione di messaggistica simile a WhatsApp. L'uso dei CDN di Vue.js e delle librerie Bootstrap semplifica il processo di sviluppo e fornisce un'esperienza simile a WhatsApp agli utenti finali.

Questa replica è stata sviluppata come esercizio di apprendimento per dimostrare l'uso di Vue.js nel costruire un'applicazione di chat. L'obiettivo principale è fornire un'esperienza di sviluppo pratica e comprendere i concetti fondamentali di Vue.js nell'ambito di un'applicazione di messaggistica in tempo reale.

# vue-dischi

Questa applicazione è un frontend per un negozio di videogiochi che si collega a un server API fornito da un backend Laravel. È stata sviluppata utilizzando Vue.js e sfrutta molte delle sue funzionalità, come Vue Router per la gestione delle rotte e axios per effettuare chiamate HTTP al server.

L'applicazione consente agli utenti di visualizzare una lista di videogiochi, dettagli specifici su ciascun gioco e di contattare il negozio attraverso un modulo di contatto. Include pagine per la visualizzazione dei dettagli di ciascun gioco, una pagina per contattare il negozio e una pagina per mostrare i giochi di un editore specifico.

È progettata per essere responsiva, con un layout che si adatta a diversi dispositivi, e utilizza stili CSS per migliorare l'aspetto visivo dell'applicazione. Il codice è organizzato in componenti Vue separati per una gestione più pulita e modulare.

L'applicazione sfrutta anche funzionalità avanzate di Vue come la comunicazione tra componenti, l'uso dei router per la navigazione e la gestione dello stato dell'applicazione.

# vue-email-list

Questo codice rappresenta una pagina HTML che utilizza Vue.js e Axios per generare e visualizzare una lista di 10 indirizzi email casuali ottenuti da un API remota.

La pagina HTML è strutturata per mostrare una lista di indirizzi email all'interno del tag ul. Il contenuto della lista viene manipolato attraverso Vue.js, dove viene definita un'applicazione Vue all'interno del tag #app.

L'app Vue si connette a un endpoint remoto tramite Axios per ottenere indirizzi email casuali da https://flynn.boolean.careers/exercises/api/random/mail. Il metodo generateMailList() all'avvio della pagina richiama l'API per ottenere 10 indirizzi email casuali e li visualizza nell'interfaccia utente.

Il codice è strutturato per consentire l'aggiornamento della lista dei mail all'avvio della pagina o tramite l'interazione dell'utente con l'applicazione Vue. È un esempio di utilizzo di librerie esterne per ottenere dati da un API remoto e utilizzare Vue.js per gestire l'interfaccia utente in modo reattivo.

# vue-hello

Questo progetto contiene un'applicazione Vue con un titolo e un'immagine che cambia dinamicamente in base ai dati forniti. Inoltre, è presente un bottone per attivare la modalità scura o chiara, che modifica il tema dell'applicazione in base al tema attualmente selezionato.

Il file JavaScript include l'inizializzazione dell'applicazione Vue con un semplice messaggio di saluto e un'immagine casuale. La funzione darkModeToggle gestisce il cambio tema tra luce e scuro al click del bottone. L'applicazione è stata costruita utilizzando Bootstrap per lo stile e Vue.js per la gestione della logica.

# vue-slider

Questa è un'applicazione di carosello che utilizza Vue.js per mostrare una galleria di immagini di giochi. La pagina HTML contiene un componente Vue che gestisce il carosello delle immagini, consentendo la navigazione tra le immagini principali tramite bottoni e la visualizzazione di anteprime come elementi selezionabili.

La struttura HTML definisce un contenitore principale Vue (#app) che contiene la galleria principale (#gallery) con le immagini e un set di bottoni che permettono di scorrere tra le immagini e di avviare/fermare l'autoplay. Sotto la galleria, ci sono le miniature delle immagini (#thumbnails) che fungono da selettori per le immagini principali.

Il file CSS personalizzato (style.css) contiene stili per il layout della pagina, la visualizzazione delle immagini, la grafica dei bottoni e la gestione delle miniature.

Il file JavaScript (script.js) contiene il codice Vue che definisce il comportamento del carosello. Utilizza le funzionalità di Vue per gestire lo stato dell'applicazione, come l'indice dell'immagine attualmente visualizzata, l'avvio/fermo dell'autoplay e la navigazione tra le immagini.

I dati delle immagini sono memorizzati in un array (pictures) che contiene oggetti con le informazioni su ogni immagine: percorso dell'immagine, titolo e testo descrittivo.

L'applicazione è progettata per mostrare un carosello di immagini di giochi in modo interattivo e responsive, permettendo agli utenti di esplorare le immagini principali attraverso i bottoni di navigazione o le miniature sottostanti. La struttura modulare e l'interfaccia intuitiva la rendono adatta per la presentazione di gallerie di immagini.

# vue-todolist

Questa è una semplice applicazione di "To Do List" creata con Vue.js. Consente agli utenti di aggiungere, eliminare e contrassegnare compiti come completati o da completare.

La pagina web mostra una casella di input in cui gli utenti possono digitare nuovi compiti e premere "Aggiungi" per aggiungerli alla lista. I compiti aggiunti vengono visualizzati sotto forma di elenco con la possibilità di contrassegnarli come completati o eliminarli.

La struttura è divisa in due sezioni principali:
Header: contiene un banner che rappresenta il titolo della lista.
Main: contiene la sezione principale dell'applicazione, dove gli utenti possono aggiungere, visualizzare e gestire i compiti.

Il CSS personalizzato fornisce uno stile minimale all'elenco dei compiti, consentendo agli utenti di fare clic su un compito per contrassegnarlo come completato. Inoltre, la prima lettera di ogni compito viene capitalizzata per motivi estetici.

Lo script Vue.js definisce una piccola applicazione con dati predefiniti per alcuni compiti iniziali. La logica Vue.js gestisce le funzioni per aggiungere, eliminare e contrassegnare come completati i compiti. Sfrutta la reattività di Vue per mantenere aggiornata l'interfaccia utente in base alle azioni dell'utente.
