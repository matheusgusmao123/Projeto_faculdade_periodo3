    let senha1 = document.querySelector('#senha1');
    let labelSenha1 = document.querySelector('#labelSenha1');
    let validSenha1 = false;

    let senha2 = document.querySelector('#senha2');
    let labelSenha2 = document.querySelector('#labelSenha2');
    let validSenha2 = false;

    let submitButton = document.querySelector('#sub');

    senha1.addEventListener('keyup', () => {
        const valorSenha = senha1.value.trim();
        if (/^[a-zA-Z]{8,}$/.test(valorSenha)) {
            labelSenha1.setAttribute('style', 'color: green');
            labelSenha1.innerHTML = 'Nova senha';
            senha1.setAttribute('style', 'outline: red');
            validSenha1 = true;
        } else {
            labelSenha1.style.color = 'red';
            labelSenha1.innerHTML = '<strong>Nova senha* só aceitamos 8 letras.</strong>';
            senha1.setAttribute('style', 'outline: red');
            validSenha1 = false;
        }
        checkPasswords();
    });

    senha2.addEventListener('keyup', () => {
        if (senha1.value !== senha2.value) {
            labelSenha2.style.color = 'red';
            labelSenha2.innerHTML = '<strong>Confirme sua Senha* As senhas não estão iguais</strong>';
            senha2.setAttribute('style', 'outline: red');
            validSenha2 = false;
        } else {
            labelSenha2.setAttribute('style', 'color: green');
            labelSenha2.innerHTML = 'Confirme sua Senha';
            senha2.setAttribute('style', 'outline: green');
            validSenha2 = true;
        }
        checkPasswords();
    });

    function checkPasswords() {
        if (validSenha1 && validSenha2 && (senha1.value === senha2.value)) {
            submitButton.classList.add('active');
        } else {
            submitButton.classList.remove('active');
        }
    }