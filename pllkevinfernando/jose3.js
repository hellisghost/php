function cargardata(){
    let respuesta = document.getElementById("respuesta");
    let listo = document.getElementById("listo");
    let para = document.getElementById("para");
    let dato1 = document.getElementById("dato1").value;
    let dato2 = document.getElementById("dato2").value;
    let suma = parseInt(dato1) + parseInt(dato2)
    let resta = parseInt(dato1) - parseInt(dato2)
    let multi = parseInt(dato1) * parseInt(dato2)
    respuesta.innerText = suma
    listo.innerText = resta
    para.innerText = multi
    document.getElementById("respuesta").innerHTML = "la suma es de "+suma+"";
    document.getElementById("listo").innerText = "la resta es de "+resta+"";
    document.getElementById("para").innerText = "la multiplicacion es de "+multi+"";
}