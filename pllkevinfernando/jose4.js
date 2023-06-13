function cargardata(){
    let respuesta = document.getElementById("respuesta");
    let total = document.getElementById("total");
    let dato2 = document.getElementById("dato2").value;
    let salario = parseInt(dato2) * 0.15
    respuesta.innerText = salario
    total.innerText = salario + parseInt(dato2)
    document.getElementById("respuesta").innerHTML = "<div> su aumento es de "+salario+" para un toatal de "+total+"</div>"
}