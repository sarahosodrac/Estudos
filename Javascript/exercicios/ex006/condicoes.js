var agora = new Date()
var diasemana = agora.getDay()

switch(diasemana){
    case 0:
        console.log('Domingo')
        break
    case 1:
        console.log('Segunda')
        break
    case 2:
        console.log('Terça')
        break
    case 3:
        console.log('Quarta')
    case 4:
        console.log('Quinta')
        break
    case 5:
        console.log('Sexta')
        break
    case 6:
        console.log('Sabado')
        break
    default:
        console.log('erro')
        break

}





/*var agora = new Date()
var hora = agora.getHours()

if(hora<=12){
    console.log(`Bom dia! são ${hora} horas`)
}
    else if(hora<=18){
        console.log(`boa tarde! são ${hora} horas`)

    }
        else{
            console.log(`boa noite! são ${hora} horas`)

    }
*/