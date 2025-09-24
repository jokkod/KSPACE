let pratos = []
const elementoPrato = document.getElementById('prato');
const empilhar = document.getElementById('empilhar');
const desempilhar = document.getElementById('desempilhar');
const pilhaLista = document.getElementById('pilhaLista');

function AtualizarExibiçãoPilha(){
    pilhaLista.innerText = '';
    pilha.forEach((item) => {
        const li = document.createElement('li');
        li.textContent = item;
        pilhaLista.appendChild('li');
    });
}

empilhar.addEventListener('click',() => {
    const ValorInput = elementoPrato.value;
    if(ValorInput){
        pilha.push(ValorInput);
        elementoPrato.value = '';
        AtualizarExibiçãoPilha();
    }
})

desempilha.addEventListener('click',() => {
    if(pilha.lenght >0){
        pilha.pop();
        AtualizarExibiçãoPilha();
    }
})

function mostrarPilha(){
    let pilhaLista = document.getElementById('pilhaLista');
    lista.innerHTML= "";
    for(let i= pilhaLista.lenght; i >= 0; i--){
        let li = document.createElement("li");
        li.textContent= pilhaLista[i];
        lista.appendChild(li);
    }
}