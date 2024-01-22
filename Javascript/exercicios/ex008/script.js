function contador(){

var selecao_ini = window.document.getElementById('caixa_ini')
var selecao_fim = window.document.getElementById('caixa_fim')
var selecao_passo = window.document.getElementById('caixa_passo')

var inicio = Number(selecao_ini.value)
var fim = Number(selecao_fim.value)
var passo = Number(selecao_passo.value)

var f = fim
var p = passo
if(inicio==''){
    window.alert('Revise as informações!')
}
  else {

    for(i = inicio; i<=f; i = i + p){
        res.innerHTML += ` - ${i}`
    }

}
}
