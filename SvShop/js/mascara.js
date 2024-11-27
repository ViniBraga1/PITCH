function MascaraCPF(){
    var InputCpf = document.getElementById("cpf");

InputCpf.addEventListener("input", function () {
    var InputCpf_formatado = InputCpf.value.replace(/[^\d]/g, ""); // Remove todos os caracteres não numéricos

    if (InputCpf_formatado.length > 11) {
        InputCpf_formatado = InputCpf_formatado.substring(0, 11);
    }

    if (InputCpf_formatado.length > 3) {
        InputCpf_formatado = InputCpf_formatado.substring(0, 3) + "." + InputCpf_formatado.substring(3);
    }
    if (InputCpf_formatado.length > 7) {
        InputCpf_formatado = InputCpf_formatado.substring(0, 7) + "." + InputCpf_formatado.substring(7);
    }
    if (InputCpf_formatado.length > 11) {
        InputCpf_formatado = InputCpf_formatado.substring(0, 11) + "-" + InputCpf_formatado.substring(11);
    }

    InputCpf.value = InputCpf_formatado;
});

    
}

function MascaraCEP(){
    var InputCep = document.getElementById("cep");

InputCep.addEventListener("input", function () {
    var InputCep_formatado = InputCep.value.replace(/[^\d]/g, ""); // Remove todos os caracteres não numéricos

    if (InputCep_formatado.length > 8) {
        InputCep_formatado = InputCep_formatado.substring(0, 8);
    }

    if (InputCep_formatado.length > 5) {
        InputCep_formatado = InputCep_formatado.substring(0, 5) + "-" + InputCep_formatado.substring(5);
    }

    InputCep.value = InputCep_formatado;
});

}