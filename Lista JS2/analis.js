let valores = [13,-7,33,-14,-2,21,17,8,-2,1];
var somaDosPares = 0;
var contadorImpares= 0;
var maiorNumero = 0;
var menorNumero = 0;

for(let i=0; i<10; i++){
    if(i % 2 === 0){
        somaDosPares += valores[i];
    }else{ 
        contadorImpares += valores[i];
        break;
    }
}
console.log("Soma dos Pares:"+somaDosPares);
console.log("Contador de Ímpares:"+contadorImpares);

const maiorNumero = Math.max(13,-7,33,-14,-2,21,17,8,-2,1);
console.log("Maior Número: "+maiorNumero);
const menorNumero = Math.min(13,-7,33,-14,-2,21,17,8,-2,1);
console.log("Menor Número: "+menorNumero);
