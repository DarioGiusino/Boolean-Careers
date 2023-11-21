/* Traccia:
Chiedi all’utente il suo nome,
poi chiedi il suo cognome,
poi chiedi il suo colore preferito
Infine scrivi sulla pagina nomecognomecolorepreferito21 */


/* STEPs
1- prendo elemento dal dom
2- chiedo nome
3- chiedo cognome
4- chiedo colore
5- stampo su schermo 
(prima analisi)
*/

// Definisco e prendo elemento(i) dal dom da riempire
const password = document.getElementById('psw');
const nameTitle = document.getElementById('title-name');
////console.log(password);
////console.log(nameTitle);

// Chiedo nome utente
const userName = prompt('Inserisci il tuo nome:', 'Mega');
////console.log(userName);

// Chiedo cognome utente
const userSurname = prompt('Inserisci il tuo cognome:', 'Mind');
////console.log(userSurname);

// Chiedo colore preferito utente
const userColor = prompt('Inserisci adesso il tuo colore preferito:', 'Nero');
////console.log(userColor);

// Riempo titolo e campo password
password.innerText = userName + userSurname + userColor + '21';
nameTitle.innerText = userName;