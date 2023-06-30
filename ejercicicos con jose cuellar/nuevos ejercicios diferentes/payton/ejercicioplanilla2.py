print("nota de aprobacion")
nota1 = int(input("esctiba la primera nota"))
nota2 = int(input("escriba la segunda nota"))
nota3 = int(input("escriba la tercera nota"))
respuesta = (nota1+nota2+nota3)/3
if respuesta < 69:
    print("usted perdio el año ",respuesta," por malo jajajajaj")
if respuesta > 70:
    print("usted gano el año ",respuesta," felicidades")