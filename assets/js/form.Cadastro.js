/* formatação de CPF não é mais necessario.
 


function formataCPF(cpf) {
    const elementoAlvo = cpf;
    let cpfAtual = cpf.value;


    cpfAtual = cpfAtual.replace(/[\.-]/g, ''); // remove . e -

    let cpfAtualizado;

    cpfAtualizado = cpfAtual.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/,
        function (regex, argumento1, argumento2, argumento3, argumento4) {
            return argumento1 + '.' + argumento2 + '.' + argumento3 + '-' + argumento4;
        });

    elementoAlvo.value = cpfAtualizado;
} */

/* FORMATAÇÃO DE CELULAR */
function formataCelular(celular) {
    const elementoAlvo = celular;
    const celularAtual = celular.value;
    let celularNumerico = celularAtual.replace(/\D/g, ''); // Remove caracteres não numéricos
    let celularAtualizado;

    if (!celularNumerico.startsWith('55')) {
        celularNumerico = '55' + celularNumerico;
    }

    celularAtualizado = celularNumerico.replace(/(\d{2})(\d{5})(\d{4})/,
        function (_, argumento1, argumento2, argumento3) {
            return '+' + argumento1 + ' (' + argumento2.slice(0, 2) + ') ' + argumento2.slice(2)  + argumento3;
        });

    elementoAlvo.value = celularAtualizado;
}

/* TELEFONE FIXO */
function formataTelefoneFixo(telefoneFixo) {
    const elementoAlvo = telefoneFixo;
    const telefoneFixoAtual = telefoneFixo.value;
    let telefoneFixoNumerico = telefoneFixoAtual.replace(/\D/g, '');  // Remove as letras
    let telefoneFixoAtualizado;

    if (!telefoneFixoNumerico.startsWith('55')) {
        telefoneFixoNumerico = '55' + telefoneFixoNumerico;
    }

    telefoneFixoAtualizado = telefoneFixoNumerico.replace(/(\d{2})(\d{2})(\d{8})/,
        function (_, argumento1, argumento2, argumento3) {
            return '(' + argumento1 + ') ' + argumento2 + ' - ' + argumento3;
        });

    elementoAlvo.value = telefoneFixoAtualizado;
}


