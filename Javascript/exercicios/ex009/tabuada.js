function gerador(){
var setnum = window.document.getElementById('caixa_num')
var tab = window.document.getElementById('tabuada')


numero = Number(setnum.value)
var n = numero
var c = 0
do{
    r = n * c
    let item =document.createElement('option')
    item.text= ` ${n} x ${c} = ${r} `
    //res.innerHTML += ` ${n} x ${c} = ${r} `
    tab.appendChild(item)
    c++
}while(c<=10)
}