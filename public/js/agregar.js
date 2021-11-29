
const button = document.getElementById("agregar");

button.addEventListener("dblclick", function(){

    let num=prompt("Ingrese un numero para Factorizar");
    let i = 2
    let mult = 1

    while (i <= num){
        mult = mult * i;
        i++
    }
    alert("El factorial del numero "+num+" Es: "+mult);
});