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
                            // Parsear la respuesta JSON
                            let jsonResponse;
                            try {
                                jsonResponse =
                                    typeof response === "object"
                                        ? response
                                        : JSON.parse(response);
                            } catch (e) {
                                jsonResponse = {
                                    success: false,
                                    message:
                                        "Error al procesar la respuesta del servidor",
                                };
                            }

                            // Remover validación visual
                            $(form).removeClass("was-validated");

                            // Actualizar clase del mensaje según el éxito o fracaso
                            $(formMessages).removeClass("error success");
                            $(formMessages).addClass(
                                jsonResponse.success ? "success" : "error"
                            );

                            // Mostrar mensaje
                            $(formMessages).html(jsonResponse.message);

                            // Si fue exitoso, limpiar el formulario
                            if (jsonResponse.success) {
                                form.reset();
                            }

                            // Limpiar el mensaje después de 5 segundos
                            setTimeout(function () {
                                $(formMessages).html(""); // Limpia el contenido
                                $(formMessages).removeClass("success error"); // Remueve las clases
                            }, 5000);
                        },
                        error: function (xhr, status, error) {
                            // Remover indicador de carga
                            $("#hold-on-a-sec").removeClass("is-loading");

                            // Intentar parsear la respuesta de error
                            let errorMessage;
                            try {
                                let jsonResponse = JSON.parse(xhr.responseText);
                                errorMessage = jsonResponse.message;
                            } catch (e) {
                                errorMessage =
                                    "Ocurrió un error al enviar el mensaje. Por favor, intenta nuevamente.";
                            }

                            // Actualizar clase del mensaje
                            $(formMessages).removeClass("success");
                            $(formMessages).addClass("error");

                            // Mostrar mensaje de error
                            $(formMessages).html(errorMessage);

                            // Limpiar el mensaje de error después de 5 segundos
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
