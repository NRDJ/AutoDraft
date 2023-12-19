<div class="redes-sociales">
        <a href="#"><img src="assets/img/fb.png" alt=""></a>
        <a href="#"><img src="assets/img/ig.png" alt=""></a>
</div>
<div class="head-list">
    <!-- Adds the class 'active' to the <a> element to mark it as selected depending on the route -->
    <ul>
        <li class="imagen-hidden-uno"><a href="#"><img src="assets/img/logo.png" alt=""></a></li>
        <li class="imagen-hidden"><a href="#"><img src="assets/img/blanco.png" alt=""></a></li>
        <li><a href="{{ route('index') }}" class="{{ Request::is('index') ? 'active' : '' }}">Inicio</a></li>
        <li><a href="{{ route('catalogo') }}" class="{{ Request::is('catalogo') ? 'active' : '' }}">Catálogo</a></li>
        <li><a href="{{ route('laminas') }}" class="{{ Request::is('laminas') ? 'active' : '' }}">Láminas de seguridad</a></li>
        <li><a href="{{ route('sobre') }}" class="{{ Request::is('sobre') ? 'active' : '' }}">Sobre nosotros</a></li>
        <li><a href="{{ route('contacto') }}" class="{{ Request::is('contacto') ? 'active' : '' }}">Contacto</a></li>
        <li><a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : '' }}">Intranet</a></li>
        <li><a href="#">Cesta</a></li>
    </ul>
</div>