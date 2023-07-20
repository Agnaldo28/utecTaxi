const registrationForm = document.getElementById('registrationForm');
const passwordInput = document.getElementById('pass');
const confirmPasswordInput = document.getElementById('senha');
const passwordError = document.getElementById('password-error');

registrationForm.addEventListener('submit', function(event) {
    if (passwordInput.value !== confirmPasswordInput.value) {
        event.preventDefault(); // Impede o envio do formulário
        passwordError.textContent = "As senhas não coincidem!";
    } else {
        passwordError.textContent = ""; // Limpa a mensagem de erro se as senhas coincidirem
    }
});