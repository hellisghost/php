function calcular(){
    var print = document.getElementById("respuesta")
    
    let nota1, nota2, nota3

    nota1 = parseInt(document.getElementById("nota1").value)
    nota2 = parseInt(document.getElementById("nota2").value)
    nota3 = parseInt(document.getElementById("nota3").value)

    promedio = (nota1 + nota2 + nota3) /3
    
    if(promedio < 69){
        print.innerHTML = "su nota es de: "+promedio+" muy malo jajajajaja"
    }else{
        print.innerHTML = "felicidades su nota es de "+promedio+" aprobo"
    }
    

}