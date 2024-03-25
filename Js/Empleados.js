document.getElementById("Personal").addEventListener('focus', function(){
    document.getElementById("SelectPersonal").style.visibility = 'visible'
})
document.getElementById("Personal").addEventListener('focusout', function(){
    setTimeout(function() {
        document.getElementById("SelectPersonal").style.visibility = 'hidden';
    }, 500);
});
document.getElementById("Personal").addEventListener('input', function(){
    var searchTerm = this.value.toLowerCase();
    var labels = document.querySelectorAll('#SelectPersonal label');
    
    if(document.getElementById("Personal").value.length == 0){
        document.getElementById("sin_empleado").checked = true
    }

    labels.forEach(function(label) {
        var labelText = label.textContent.toLowerCase();
        if (labelText.includes(searchTerm)) {
            label.style.display = 'block';
        } else {
            label.style.display = 'none';
            document.getElementById("sin_empleado").checked = true
        }
    });
});
function ValorLabelAlInput(id){
    document.getElementById("Personal").value = id.textContent
    document.getElementById("SelectPersonal").style.visibility = 'hidden'
}
function ValorLabelAlInput_ciudad(id){
    document.getElementById("Ciudad").value = id.textContent
    document.getElementById("SelectCiudad").style.visibility = 'hidden'
}