let nome = document.querySelector('#nome')
let labelNome= document.querySelector('#labelNome')
let validNome= false

let login = document.querySelector('#login')
let labelLogin = document.querySelector('#labelLogin')
let validLogin= false

let senha1 = document.querySelector('#senha1')
let labelSenha1= document.querySelector('#labelSenha1')
let validSenha1= false

let senha2 = document.querySelector('#senha2')
let labelSenha2= document.querySelector('#labelSenha2')
let validSenha2= false

let materno = document.querySelector('#materno');
let labelMaterno = document.querySelector('#labelMaterno');
let validMaterno = false;

let email = document.querySelector('#email');
let labelEmail = document.querySelector('#labelEmail');
let validEmail = false;

let cpf = document.querySelector('#cpf');
let labelCPF = document.querySelector('#labelCPF');
let validCPF = false;

let CEP = document.querySelector('#CEP');
let labelCEP = document.querySelector('#labelCEP');
let validCEP = false;

let bairro = document.querySelector('#bairro');
let labelBairro = document.querySelector('#labelBairro');
let validBairro = false; 


let cidade =  document.querySelector('#cidade');
let labelCidade = document.querySelector('#labelCidade');
let validCidade = false

let estado = document.querySelector('#estado')
let labelEstado = document.querySelector('#labelEstado')
let validEstado = false

let rua = document.querySelector('#rua')
let labelRua = document.querySelector('#labelRua')
let validRua = false

let celular = document.querySelector('#celular');
let labelCelular = document.querySelector('#labelCelular');
let validCelular = false;

let telefoneFixo = document.querySelector('#telefoneFixo');
let labelTelefone = document.querySelector('#labelTelefone');
let validTelefone = false;

let MSGErro = document.querySelector('#MSGErro')
let MSGSuc = document.querySelector('#MSGSuc')

let forme = document.querySelector('forme')



function contemApenasLetras(valor) {
    return /^[a-zA-Z\s]+$/.test(valor);
}


/*Fazer com que o nome tenha entre 15 e 40 letras */
nome.addEventListener('input', () => {
    const valorNome = nome.value.trim();
    if (contemApenasLetras(valorNome)) {
        labelNome.setAttribute('style', 'color: green');
        labelNome.innerHTML = 'Nome';
        nome.setAttribute('style', ' outline: 1px solid green');
        validNome = true
    } else {
        labelNome.setAttribute('style', 'color: red');
        labelNome.innerHTML = '<strong>Nome* insira apenas letras</strong>';
        nome.setAttribute('style', ' outline: 1px solid red');
        validNome = false
    }

/* Verifica o comprimento do nome */
    if (valorNome.length < 15 || valorNome.length > 40) {
        labelNome.setAttribute('style', 'color: red');
        labelNome.innerHTML = '<strong>Nome* insira entre 15 a 40 caracteres</strong>';
        nome.setAttribute('style', ' outline: 1px solid red');
        validNome = false
    }
});

/* Verifica se o campo Materno contém apenas letras */
materno.addEventListener('input', () => {
    const valorMaterno = materno.value.trim();
    if (contemApenasLetras(valorMaterno)) {
        labelMaterno.setAttribute('style', 'color: green');
        labelMaterno.innerHTML = 'Nome Materno';
        materno.setAttribute('style', ' outline: 1px solid green');
        validMaterno = true;
    } else {
        labelMaterno.setAttribute('style', 'color: red');
        labelMaterno.innerHTML = '<strong>Nome Materno* insira apenas letras</strong>';
        materno.setAttribute('style', ' outline: 1px solid red');
        validMaterno = false;
    }
});

/* Verifica se o campo Email é válido */
email.addEventListener('input', () => {
    const valorEmail = email.value.trim();
    if (/^\S+@\S+\.\S+$/.test(valorEmail)) {
        labelEmail.setAttribute('style', 'color: green');
        labelEmail.innerHTML = 'E-mail';
        email.setAttribute('style', ' outline: 1px solid green');
        validEmail = true;
    } else {
        labelEmail.setAttribute('style', 'color: red');
        labelEmail.innerHTML = '<strong>E-mail* insira um e-mail válido</strong>';
        email.setAttribute('style', ' outline: 1px solid red');
        validEmail = false;
    }
});

/* Verifica se o campo bairro não está vazio */
bairro.addEventListener('input', () => {
    const valorBairro = bairro.value.trim();
    if (valorBairro !== '') {
        labelBairro.setAttribute('style', 'color: green');
        labelBairro.innerHTML = 'Bairro';
        bairro.setAttribute('style', ' outline: 1px solid green');
        validBairro = true;
    } else {
        labelBairro.setAttribute('style', 'color: red');
        labelBairro.innerHTML = '<strong>Bairro* este campo é obrigatório</strong>';
        bairro.setAttribute('style', ' outline: 1px solid red');
        validBairro = false;
    }
});

/* Verifica se o campo CPF é válido */
/* Validação do CPF */
cpf.addEventListener('input', () => {
    const valorCPF = cpf.value.trim();

    function isCPF(cpf) {
        cpf = cpf.replace(/\.|-/g, "");
        let soma = 0;
        let resto;

        if (cpf.length !== 11 ||
            cpf === "00000000000" ||
            cpf === "11111111111" ||
            cpf === "22222222222" ||
            cpf === "33333333333" ||
            cpf === "44444444444" ||
            cpf === "55555555555" ||
            cpf === "66666666666" ||
            cpf === "77777777777" ||
            cpf === "88888888888" ||
            cpf === "99999999999")
            return false;

        for (let i = 1; i <= 9; i++) soma = soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
        resto = (soma * 10) % 11;

        if ((resto === 10) || (resto === 11))  resto = 0;
        if (resto !== parseInt(cpf.substring(9, 10))) return false;

        soma = 0;
        for (let i = 1; i <= 10; i++) soma = soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
        resto = (soma * 10) % 11;

        if ((resto === 10) || (resto === 11))  resto = 0;
        if (resto !== parseInt(cpf.substring(10, 11))) return false;
        return true;
    }

    if (isCPF(valorCPF)) {
        labelCPF.setAttribute('style', 'color: green');
        labelCPF.innerHTML = 'CPF';
        cpf.setAttribute('style', 'outline: 1px solid green');
        validCPF = true;
    } else {
        labelCPF.setAttribute('style', 'color: red');
        labelCPF.innerHTML = '<strong>CPF* insira um CPF válido</strong>';
        cpf.setAttribute('style', 'outline: 1px solid red');
        validCPF = false;
    }
});

celular.addEventListener('input', () => {
    const valorCelular = celular.value.trim();
    // Verifica se o valor do celular não ultrapassa 20 caracteres
    if (valorCelular.length <= 20) {
        labelCelular.setAttribute('style', 'color: green');
        labelCelular.innerHTML = 'Celular';
        celular.setAttribute('style', ' outline: 1px solid green');
        validCelular = true;
    } else {
        labelCelular.setAttribute('style', 'color: red');
        labelCelular.innerHTML = '<strong>Celular* insira no máximo 20 caracteres</strong>';
        celular.setAttribute('style', ' outline: 1px solid red');
        validCelular = false;
    }
});

/* Verifica se o campo Telefone Fixo é válido */
telefoneFixo.addEventListener('input', () => {
    const valorTelefone = telefoneFixo.value.trim();
    if (/\(\d{2}\) \d{2} - \d{8}/.test(valorTelefone)) {
        labelTelefone.setAttribute('style', 'color: green');
        labelTelefone.innerHTML = 'Telefone Fixo';
        telefoneFixo.setAttribute('style', ' outline: 1px solid green');
        validTelefone = true;
    } else {
        labelTelefone.setAttribute('style', 'color: red');
        labelTelefone.innerHTML = '<strong>Telefone Fixo* insira um número de telefone fixo válido</strong>';
        telefoneFixo.setAttribute('style', ' outline: 1px solid red');
        validTelefone = false;
    }
});



/*login validar 6 letras*/

login.addEventListener('keyup', () => {
    let valorLogin = login.value.trim();
    if (/^[a-zA-Z]{6}$/.test(valorLogin)) {
        labelLogin.setAttribute('style', 'color: green')
        labelLogin.innerHTML = 'Login';
        login.setAttribute('style', 'outline: 1px solid green') 
        validLogin = true
    } else {
        labelLogin.style.color = 'red';
        labelLogin.innerHTML = '<strong>Login* insira exatamente 6 letras</strong>';
        login.setAttribute('style', 'outline: 1px solid red')  
        validLogin = false


    }
})

/*Senha 8 caracteres*/

senha1.addEventListener('keyup', () => {
    const valorSenha = senha1.value.trim();
    if (/^[a-zA-Z]{8,}$/.test(valorSenha)) {
        labelSenha1.setAttribute('style', 'color: green')
        labelSenha1.innerHTML = 'senha';
        senha1.setAttribute('style', 'outline: 1px solid green')
        validSenha1 = true
    } else {
        labelSenha1.style.color = 'red';
        labelSenha1.innerHTML = '<strong>Senha* só aceitamos 8 letras</strong>';
        senha1.setAttribute('style', 'outline: 1px solid red')    
        validSenha1 = false
    }
})

/*Confirmar Senha*/

senha2.addEventListener('keyup', () => {
    if (senha1.value != senha2.value) {
        labelSenha2.style.color = 'red';
        labelSenha2.innerHTML = '<strong>Confirme sua Senha* As senhas não estáo iguais  </strong>';
        senha2.setAttribute('style', 'outline: 1px solid red')  
        validSenha2 = false

    } else {
        labelSenha2.setAttribute('style', 'color: green')
        labelSenha2.innerHTML = 'Confirme sua Senha';
        senha2.setAttribute('style', 'outline: 1px solid green') 
        validSenha2 = true
    }
})

/*CEP API VALIDADOR  */

document.querySelector('#cep').addEventListener('blur', function() {
    let cep = this.value;
    console.log('CEP:', cep);  // Log para verificar o valor do CEP

    // Validação para aceitar apenas números e o sinal de traço
    let validacep = /^[0-9]{5}-?[0-9]{3}$/;

    if (validacep.test(cep)) {
        // Remover traço para a consulta na API
        cep = cep.replace('-', '');
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                console.log('Dados da API:', data);  // Log para verificar os dados recebidos
                if (!("erro" in data)) {
                    document.querySelector('#bairro').value = data.bairro;
                    document.querySelector('#cidade').value = data.localidade;
                    document.querySelector('#estado').value = data.uf;
                    document.querySelector('#rua').value = data.logradouro;

                    document.querySelector('#labelBairro').setAttribute('style', 'color: green');
                    document.querySelector('#labelCidade').setAttribute('style', 'color: green');
                    document.querySelector('#labelEstado').setAttribute('style', 'color: green');
                    document.querySelector('#labelRua').setAttribute('style', 'color: green');

                    document.querySelector('#bairro').disabled = true;
                    document.querySelector('#cidade').disabled = true;
                    document.querySelector('#estado').disabled = true;
                    document.querySelector('#rua').disabled = true;

                    validCEP = true;
                    validCidade = true;
                    validEstado = true;
                    validRua = true;
                    validBairro = true; 
                } else {
                    document.querySelector('#labelBairro').setAttribute('style', 'color: red');
                    document.querySelector('#labelCidade').setAttribute('style', 'color: red');
                    document.querySelector('#labelEstado').setAttribute('style', 'color: red');
                    document.querySelector('#labelRua').setAttribute('style', 'color: red');

                    document.querySelector('#bairro').disabled = false;
                    document.querySelector('#cidade').disabled = false;
                    document.querySelector('#estado').disabled = false;
                    document.querySelector('#rua').disabled = false;
                }
            })
            .catch(error => {
                console.error('Erro na requisição:', error);  // Log para verificar erros na requisição
                alert("Erro ao buscar CEP. Tente novamente mais tarde.");
            });
    } else {
        cep.setAttribute('style', 'outline: 1px solid red');
        document.querySelector('#labelCEP').setAttribute('style', 'color: red');
        validCEP = false;
    }
});


/*quando clicado no botão, vai salvar os campos de login e senha e colocar no LocalStorage */


/*
forme.addEventListener('submit', function(e){
    e.preventDefault();
    
    window.location.href = "LLogin.html";
})


function validar(){
   
    if(validLogin && validSenha1 && validSenha2){
        let listaUser = JSON.parse(localStorage.getItem('listaUser') || '[]')

    listaUser.push(
    {
        loginCad: login.value,
        senhaCad: senha1.value
    }
    )

    localStorage.setItem('listaUser', JSON.stringify(listaUser))
        MSGSuc.setAttribute('style', 'display: block')
        MSGSuc.innerHTML = '<strong>Cadastrando...</strong>'
        MSGErro.setAttribute('style', 'display: none')
        MSGErro.innerHTML = ' '
        window.location.href= "LLogin.html";

    }else{
        MSGErro.setAttribute('style', 'display: block')
        MSGErro.innerHTML = '<strong>Preencha todos os campos corretamente.</strong>'
        MSGSuc.setAttribute('style', 'display: none')
        MSGSuc.innerHTML = ' '
    }
}
*/