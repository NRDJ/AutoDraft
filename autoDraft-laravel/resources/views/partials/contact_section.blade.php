<section id="seccion-tres">
        <div class="pagos"><img src="/assets/img/pagos.png" alt=""></div>
        <div class="contacto">
            <span class="contacto-descripcion">
                <p>Líderes en seguridad Automotriz<br><br>
                    DIRECCIÓN: 1 Norte 1055 esquina 3 1/2 Oriente, Viña del Mar<br>
                    TELÉFONO: (+56) 3290 8872 / (+56) 9 4771 6961<br>
                    EMAIL: ventas.autodraft@gmail.com<br><br><br><br>
                    LUN - VIE: 9:45 - 18:00<br>
                    SÁBADO: 10:00 - 13:00<br>
                    DOMINGO: CERRADO
                </p>
                <div class="contacto-imagen"><img src="/assets/img/logo-dos.png" alt=""></div>
            </span>
            <span class="formulario">
                <form id="form" action="https://submit-form.com/SVOvSbIty" method="POST" 
                    data-botpoison-public-key="pk_a8d38f60-e514-46aa-bf68-d745e565a5d4">
                    <p>Nombre</p>
                    <br>
                    <input type="text" name="Nombre" id="nombre">
                    <br>
                    <br>
                    <p>Email</p>
                    <br>
                    <input type="email" name="Correo electrónico" id="email">
                    <br>
                    <br>
                    <p>Motivo del correo</p>
                    <br>
                    <textarea name="Asunto del mensaje" id="mensaje" cols="30" rows="10"></textarea>
                    <br><br><br><br><br>
                    <div class="btn-envio"><input value="Enviar mensaje" type="submit" id="button"></div>

                    <input type="hidden" name="_next" value="www.autodraft.cl">
                    <input type="hidden" name="_captcha" value="false">
                </form>
                <script>
                    $(document).ready(function() {

                        var formElement = document.getElementById("form");
                        var buttonElement = document.getElementById("button");
                        formElement.addEventListener("botpoison-challenge-start", function () {
                            buttonElement.setAttribute("disabled", "disabled");
                        });
                        formElement.addEventListener("botpoison-challenge-success", function () {
                            buttonElement.removeAttribute("disabled");
                        });
                        formElement.addEventListener("botpoison-challenge-error", function () {
                            buttonElement.removeAttribute("disabled");
                        });
                    });
                </script>
            </span>
        </div>
        <div class="linea-final"></div>
    </section>