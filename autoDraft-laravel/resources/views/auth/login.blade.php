<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles-intranet.css" type="text/css">
    <title>Intranet</title>
</head>

<body>
@include('partials.head_navbar')
    <div class="banner-sobre-nosotros">
        <h2>Intranet</h2>
    </div>
    <section class="seccion-uno">
        <div class="formulario">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="">Inicio de sesión</label>
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('')" />
                    <x-text-input id="email" class="block mt-1 w-full" 
                                    type="email" name="email" 
                                    :value="old('email')"
                                    placeholder="Email"
                                    required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    placeholder="Contraseña"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                
                <input class="ingreso" type="submit" value="Ingresar">
        </div>
        <div></div>
        </form>
        <div class="frase">
            <p>En Autodraft nos comprometemos a brindarle un servicio excepcional que supere sus expectativas en cada
                interacción. Nuestro enfoque se centra en la calidad, la transparencia y la satisfacción del cliente.
                Desde el momento en que elige nuestros servicios, puede confiar en que trabajaremos incansablemente para
                entender y satisfacer sus necesidades. Nos esforzamos por ofrecer soluciones eficientes, oportunistas y
                personalizadas que reflejen nuestro compromiso con la excelencia.</p>
        </div>
    </section>
</body>

</html>
