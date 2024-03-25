document.getElementById("Cargo").addEventListener('focus', function(){
    document.getElementById("SelectCargo").style.visibility = 'visible'
})
document.getElementById("Cargo").addEventListener('focusout', function(){
    setTimeout(function() {
        document.getElementById("SelectCargo").style.visibility = 'hidden';
    }, 500);
});
document.getElementById("Cargo").addEventListener('input', function(){
    var searchTerm = this.value.toLowerCase();
    var labels = document.querySelectorAll('#SelectCargo label')
    labels.forEach(function(label) {
        var labelText = label.textContent.toLowerCase();
        if (labelText.includes(searchTerm)) {
            label.style.display = 'block';
        } else {
            label.style.display = 'none';
        }
    });
});
function ValorLabelAlInput_Cargo(id){
    document.getElementById("Cargo").value = id.textContent
    document.getElementById("SelectCargo").style.visibility = 'hidden'
}