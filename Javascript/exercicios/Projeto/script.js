function carregar(){
    var msg = window.document.getElementById('msg')
    var img = window.document.getElementById('imagem')
    var agora = new Date()
    var hora = agora.getHours()
    msg.innerHTML = `A hora atual é ${hora} horas`
    
    if(hora >= 0 && hora < 12){
        img.src = 'manha.png'
        window.document.body.style.background = '#f5eabf'

   }
    else if(hora >= 12 && hora < 18){
        img.src = 'tarde.png'
        window.document.body.style.background = '#833007'
    }
    else{
        img.src = 'noite.png'
        window.document.body.style.background = '#051111'
        }


}