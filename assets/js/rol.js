document.addEventListener("DOMContentLoaded", function () {
    // Obtén referencias a los elementos HTML
    var rolSelect = document.getElementById("rolSelect");
    var torreInput = document.getElementById("torreInput");
    var apartamentoInput = document.getElementById("apartamentoInput");

    // Agrega un evento de cambio al campo de selección de roles
    rolSelect.addEventListener("change", function () {
        // Obtén el valor seleccionado
        var selectedRole = rolSelect.value;

        // Si el rol es "Residente", habilita los campos de "Torre" y "Apartamento"; 
        // de lo contrario, deshabilítalos
        if (selectedRole === "Residente") {
            torreInput.removeAttribute("disabled");
            apartamentoInput.removeAttribute("disabled");
        } else {
            torreInput.setAttribute("disabled", "disabled");
            apartamentoInput.setAttribute("disabled", "disabled");
        }
    });
});