function adicionar(n){

var seleciona_num = window.document.getElementById('caixa_num') //setei o que foi colocado na caixa
var seleciona_lista = window.document.getElementById('sellist')

numero = Number(seleciona_num.value) // guardei na variavel numero o que foi digitado


var num = [ ] // criei um vetor
num.push(Number(numero.value)) // no vetor adicionei um conteúdo do tipo numero que foi guarado na variavel numero


res.innerHTML = `O NÚMERO ${seleciona_num.value} FOI ADD`
}

function finalizar(){
    var seleciona_num = window.document.getElementById('caixa_num') //setei o que foi colocado na caixa
    var seleciona_lista = window.document.getElementById('sellist')
    
    numero = Number(seleciona_num.value) // guardei na variavel numero o que foi digitado

    res.innerHTML = `o tamanho é ${seleciona_num.length.value} FOI ADD`
}

