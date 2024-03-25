alert(1)
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
document.getElementById("Ciudad").addEventListener('focus', function(){
    document.getElementById("SelectCiudad").style.visibility = 'visible'
})
document.getElementById("Ciudad").addEventListener('focusout', function(){
    setTimeout(function() {
        document.getElementById("SelectCiudad").style.visibility = 'hidden';
    }, 500);
});
document.getElementById("Ciudad").addEventListener('input', function(){
    var searchTerm = this.value.toLowerCase();
    var labels = document.querySelectorAll('#SelectCiudad label')
    labels.forEach(function(label) {
        var labelText = label.textContent.toLowerCase();
        if (labelText.includes(searchTerm)) {
            label.style.display = 'block';
        } else {
            label.style.display = 'none';
        }
    });
});
function ValorLabelAlInput_ciudad(id){
    document.getElementById("Ciudad").value = id.textContent
    document.getElementById("SelectCiudad").style.visibility = 'hidden'
}