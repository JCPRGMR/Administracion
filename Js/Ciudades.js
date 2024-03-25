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