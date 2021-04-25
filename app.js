let opcionBorrar = document.querySelectorAll(".borrar-cliente");

for(let i = 0; i < opcionBorrar.length; i++) {
    opcionBorrar[i].addEventListener('click', confirmacion);
}

function confirmacion(e) {
    if(confirm("¿Seguro que desea eliminar este cliente?")) {
        return true;
    } else {
        e.preventDefault();
    }
}
