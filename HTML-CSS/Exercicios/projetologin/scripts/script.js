function toggleSenhaVisibilidade() {
    var senhaInput = document.getElementById("isenha");
    var olhoIcon = document.getElementById("olhoSenha");

    if (senhaInput.type === "password") {
        senhaInput.type = "text";
        olhoIcon.textContent = "Visibility_Off"; // Ícone de olho aberto
    } else {
        senhaInput.type = "password";
        olhoIcon.textContent = "Visibility"; // Ícone de olho fechado
    }
}