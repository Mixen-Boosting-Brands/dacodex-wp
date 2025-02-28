// Formulario + Validación
"use strict";
window.addEventListener(
    "load",
    function () {
        // Get the messages div.
        var formMessages = $("#form-messages");

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName("needs-validation");
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener(
                "submit",
                function (event) {
                    event.preventDefault();

                    if (form.checkValidity() === false) {
                        event.stopPropagation();
                        form.classList.add("was-validated");
                        return;
                    }

                    // Si el formulario es válido
                    form.classList.add("was-validated");

                    // Crear el objeto FormData con los datos del formulario
                    let formData = new FormData(form);

                    // Submit the form using AJAX
                    $.ajax({
                        type: $(form).attr("method"),
                        url: $(form).attr("action"),
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function () {
                            // Mostrar indicador de carga
                            $("#hold-on-a-sec").addClass("is-loading");
                        },
                        success: function (response) {
                            // Remover validación visual
                            $(form).removeClass("was-validated");

                            // Actualizar clase del mensaje
                            $(formMessages).removeClass("error");
                            $(formMessages).addClass("success");

                            // Mostrar mensaje de éxito
                            $(formMessages).html(response);

                            // Limpiar el formulario y eliminar el mensaje después de 5 segundos
                            setTimeout(function () {
                                $(formMessages).html(""); // Limpia el contenido
                                $(formMessages).removeClass("success"); // Remueve la clase
                                form.reset(); // Resetea el formulario
                            }, 5000);
                        },
                        error: function (xhr, status, error) {
                            // Remover indicador de carga
                            $("#hold-on-a-sec").removeClass("is-loading");

                            // Actualizar clase del mensaje
                            $(formMessages).removeClass("success");
                            $(formMessages).addClass("error");

                            // Mostrar mensaje de error
                            let errorMessage =
                                xhr.responseText ||
                                "Ocurrió un error al enviar el mensaje. Por favor, intenta nuevamente.";
                            $(formMessages).html(errorMessage);

                            // Limpiar el mensaje de error y sus clases después de 5 segundos
                            setTimeout(function () {
                                $(formMessages).html(""); // Limpia el contenido
                                $(formMessages).removeClass("error"); // Remueve la clase
                            }, 5000);
                        },
                        complete: function () {
                            // Remover indicador de carga
                            $("#hold-on-a-sec").removeClass("is-loading");
                        },
                    });
                },
                false
            );
        });
    },
    false
);
