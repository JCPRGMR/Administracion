
var txtAreaIngreso = document.getElementById("ingreso")
var txtAreaSalida = document.getElementById("salida")
function InsertarObservacion(element, form) {
    if (element.checked) {
        document.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                document.getElementById(form).submit()
            }
        });
    }
}

txtAreaIngreso.addEventListener('input', function(){
    if(txtAreaIngreso.value.length > 0){
        txtAreaSalida.disabled = true
    }else{
        txtAreaSalida.disabled = false
    }
})
txtAreaSalida.addEventListener('input', function(){
    if(txtAreaSalida.value.length > 0){
        txtAreaIngreso.disabled = true
    }else{
        txtAreaIngreso.disabled = false
    }
})
