// Função para validar o formulário antes de enviar
    function validarFormulario() {
        var nome = document.getElementById('nome').value;
        var email = document.getElementById('email').value;
        var mensagem = document.getElementById('mensagem').value;

        // Verifica se os campos obrigatórios estão preenchidos
        if (nome.trim() == '' || email.trim() == '' || mensagem.trim() == '') {
            alert('Por favor, preencha todos os campos obrigatórios.');
            return false; // Impede o envio do formulário
        }

        // Validação de email simples
        var emailRegex = /\S+@\S+\.\S+/;
        if (!emailRegex.test(email)) {
            alert('Por favor, insira um endereço de e-mail válido.');
            return false; // Impede o envio do formulário
        }

        return true; // Permite o envio do formulário se tudo estiver correto
    }