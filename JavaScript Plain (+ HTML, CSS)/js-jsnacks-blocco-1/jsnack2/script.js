/* In un array sono contenuti i nomi degli invitati alla festa del grande Gatsby, l’utente inserisce il suo nome tramite un input.comunicagli se può partecipare o no alla festa. (vietato usare includes() ) */

// definisco lista partecipanti e recupero elementi dal dom
const partecipants = ['Dario', 'Giuseppe', 'Bartolomeo', 'Marco', 'Rosaria', 'Giulia'];
const partecipantField = document.getElementById('partecipant');
const verifyButton = document.getElementById('verify');
const result = document.getElementById('result');

// aggancio evento al bottone
verifyButton.addEventListener('click', function(){
    // prendo valore del testo inserito nell'input
    const userName = partecipantField.value.trim();

    // verifico sia valido
    if (!userName){
        result.innerText = 'Spiacente, hai inserito dati non validi';
        return;
    }

    // controllo nella mia lista se esistente
    let isAuth = false;

    for (let i = 0; !isAuth && i < partecipants.length; i++){
        const currentName = partecipants[i];

        if (currentName === userName){
            isAuth = true;
        }
    }

    // stampo su pagina messaggio appropriato a seconda dell'esito
    const message = isAuth ? 'Puoi accedere alla festa' : 'Non sei stato invitato';

    result.innerText = message;
});