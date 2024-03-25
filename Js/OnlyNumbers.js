function validarNumero(input) {
    var regex = /^[0-9]+$/;
    if (!regex.test(input.value)) {
        input.value = input.value.slice(0, -1);
    }
}