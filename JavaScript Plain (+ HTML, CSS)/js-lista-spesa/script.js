// Data una lista della spesa (inventatela), stampare in pagina gli elementi della lista individualmente con un ciclo while.  (anche brutalmente, basta che si vedano)

const listContainer = document.getElementById('my-list');

const shoppingList = ['pane', 'acqua', 'pavesini', 'pan di stelle'];

let list = '<ul>';

let i = 0;
while (i < shoppingList.length){
    list += `<li>${shoppingList[i]}</li>`;
    i++
}

listContainer.innerHTML = `${list}</ul>`;