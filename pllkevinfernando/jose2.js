function cargardata(){
    let respuesta = document.getElementById("respuesta");
    let dato1 = document.getElementById("dato1").value;
    let dato2 = document.getElementById("dato2").value;
    let suma = parseInt(dato1) + parseInt(dato2)
    respuesta.innerText = suma
    document.getElementById("respuesta").innerHTML = "<div> su suma es de "+suma+"</div>"
}