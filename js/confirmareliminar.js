function confirmacion(e){
    if (confirm("CONFIRMAS QUE ELIMINARAS EL REGISTRO?")){
        return true;
    }else{
        e.preventDefault();
    }
}

let linkEliminar = document.querySelectorAll(".table-link_eliminar");

for (var i= 0; i<linkEliminar.length; i++){
    linkEliminar[i].addEventListener('click', confirmacion);
}