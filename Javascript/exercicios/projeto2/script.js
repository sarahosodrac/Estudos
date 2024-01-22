function verificar()
{
   var agora = new Date()
   ano = agora.getFullYear()

   var anodigitado = window.document.getElementById('caixa_ano')
   //var resultado = window.document.getElementById('res')
   var sexoselecionadomasc = window.document.getElementById('caixa_sexo_masc')
   var sexoselecionadofem = window.document.getElementById('caixa_sexo_fem')
   var img = window.document.createElement('img')
   img.setAttribute(`id`, `foto`)

   if(anodigitado.value.length == 0 || anodigitado.value > ano)
   {
      window.alert('[INVÁLIDO] Verifique as informações')
   }
   else{
      var idade = ano - Number(anodigitado.value)
      var genero = ''
      if(sexoselecionadofem.checked){
         genero = 'mulher'
         if(idade>=18 && idade <= 55){
            // mulher adulta
            img.setAttribute(`src`, `mulher_adulta.png`)
         }
         else if(idade<18){
            img.setAttribute(`src`, `jovem_mulher.png`)
         }
         else{
            img.setAttribute(`src`, `idosa.png`)
         }
      }
      else {
         genero = 'homem'
         if(idade>=18 && idade <= 55){
            img.setAttribute(`src`, `homem_adulto.png`)
         }
         else if(idade<18){
            img.setAttribute(`src`, `jovem_homem.png`)
         }
         else{
            img.setAttribute(`src`, `idoso.png`)
         }
      }

      res.innerHTML = `detectamos o genero ${genero} e a idade de ${idade} anos`
      res.appendChild(img)
   } 
    
  


}