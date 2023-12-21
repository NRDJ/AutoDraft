
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles-contraseña.css">
    <title>Cambio de contraseña</title>
</head>

<body>
    @include('partials.head_navbar')

    <section>
        <div class="container">
            <img src="../assets/img/logo.png" alt="">
            <p>Ingrese su correo y luego haga click en enviar, posteriormente le llegará un link a su correo con la
                información para la recuperación de contraseña.</p>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <!-- Email Address -->
                <label for="email" :value="__('Email')">Email</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus>
                <input type="submit" name="" id="" value="Enviar" class="btn-contrasenia">
            </form>
        </div>
    </section>
</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            var msg = "{{ session('status') }}";
            if (msg) {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: msg,
                });
            }
        });
    </script>

</html>
