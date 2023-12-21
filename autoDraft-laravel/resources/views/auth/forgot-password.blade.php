
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

</html>
