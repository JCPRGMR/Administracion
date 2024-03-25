document.getElementById("Area").addEventListener('focus', function(){
    document.getElementById("SelectArea").style.visibility = 'visible'
})
document.getElementById("Area").addEventListener('focusout', function(){
    setTimeout(function() {
        document.getElementById("SelectArea").style.visibility = 'hidden';
    }, 500);
});
document.getElementById("Area").addEventListener('input', function(){
    var searchTerm = this.value.toLowerCase();
    var labels = document.querySelectorAll('#SelectArea label')
    labels.forEach(function(label) {
        var labelText = label.textContent.toLowerCase();
        if (labelText.includes(searchTerm)) {
            label.style.display = 'block';
        } else {
            label.style.display = 'none';
        }
    });
});
function ValorLabelAlInput_Area(id){
    document.getElementById("Area").value = id.textContent
    document.getElementById("SelectArea").style.visibility = 'hidden'
}