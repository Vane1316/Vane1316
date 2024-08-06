liminar = document.querySelector("#formEliminar");
function eliminar(id) {
    let respuesta = confirm("Desea eliminar el registro con id " + id);
    if (respuesta) {
        formEliminar.submit();
    }
}