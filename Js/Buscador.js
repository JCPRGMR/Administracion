
function searchTable() {
    // Obtener el valor del campo de búsqueda
    var searchText = document.getElementById("searchInput").value.toLowerCase();
    // Obtener todas las filas dentro del tbody especificado
    var rows = document.querySelectorAll("#tbody tr");
    // Iterar sobre cada fila de la tabla
    rows.forEach(function(row) {
        // Obtener las celdas de la fila
        var cells = row.getElementsByTagName("td");
        var found = false;
        // Iterar sobre cada celda de la fila
        for (var i = 0; i < cells.length; i++) {
            var cell = cells[i];
            // Verificar si el texto de la celda contiene el texto de búsqueda
            if (cell.innerHTML.toLowerCase().indexOf(searchText) > -1) {
                found = true;
                break;
            }
        }
        // Mostrar u ocultar la fila según si se encontró una coincidencia
        if (found) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
}
