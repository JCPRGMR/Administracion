function BuscarOmision(id) {
    var request = new XMLHttpRequest();
    var params = new URLSearchParams();
    params.append('id_omision', id);
    request.open("POST", "../Json/Omisiones.php", true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var datos = JSON.parse(request.responseText);
            // console.log(datos);
            const [Personal, tiempo, medida, minutos, horas,
                Ingreso, Salida, Marcacion, Justificacion,
                Fecha_de_registro, btn_omision, botones, td_botones
              ] = [
                "Personal", "tiempoInput", "medida", "minutos", "horas",
                "ingreso", "salida", "marcacion", "Justificacion",
                "Fecha_de_registro", "btn_omision", "botones", "td_btns"
              ].map(id => document.getElementById(id))
            Personal.value = `${datos.nombres} ${datos.apellidos} | ${datos.des_area} | ${datos.des_cargo}`
            tiempo.value = datos.tiempo_omision
            datos.medida === "minuto(s)" ? minutos.selected = true : datos.medida === "hora(s)" ? horas.selected = true : null;
            datos.ingreso === 1 ? Ingreso.checked = true : Ingreso.checked = false
            datos.salida === 1 ? Salida.checked = true : Salida.checked = false
            datos.marcacion === 1 ? Marcacion.checked = true : Marcacion.checked = false
            Justificacion.value = datos.justificacion
            Fecha_de_registro.value = datos.fecha_registro_omision
            btn_omision.textContent = "Guardar"
            btn_omision.name = "Editar_omision"
            btn_omision.value = id
            btn_omision.className = "p10 br10 color3 pointer mayus negrita"
            botones.className += "p5 color4 white br10 negrita f-row jc-c a-c"
            botones.textContent = 'X'
            td_botones.className = "f-row gap5"
            document.getElementById("empleado_id_" + datos.id_fk_empleado).checked = true
            document.addEventListener('keydown', function(event) {
                if (event.key === "Escape") {
                    window.location.reload()
                }
            });

        }
    };
    request.send(params);
}
