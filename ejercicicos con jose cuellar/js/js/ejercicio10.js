function calcular(){

    let tipoA, tipoB, tipoC 

    tipoA = document.getElementById("tipoA").value
    tipoB = document.getElementById("tipoB").value
    tipoC = document.getElementById("tipoC").value

    let res=(tipoB**2) - (4*tipoA*tipoC)

    solucion = (-tipoB - Math.sqrt(res) )/ 2*tipoA
    soluciondos =  (-tipoB + Math.sqrt((tipoB**2) - (4*tipoA*tipoC)) )/ 2*tipoA

    respuesta.innerHTML = solucion, soluciondos

    document.getElementById("respuesta").innerHTML = "la raiz es de "+solucion+ "y "+soluciondos;



}