<!DOCTYPE html>
<html lang="en">
<head>
    <meta  name="csrf-token" content="{{ csrf_token() }}" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles-cruds.css" type="text/css">
    <link rel="stylesheet" href="/styles/styles-logout.css" type="text/css">
    <title>Gestión de productos</title>
</head>
<body>
    <div class="redes-sociales">
        <a href="#"><img src="/assets/img/fb.png" alt=""></a>
        <a href="#"><img src="/assets/img/ig.png" alt=""></a>
    </div>
    <div class="head-list">
        <ul>
            <li class="imagen-hidden-uno"><a href="#"><img src="/assets/img/logo.png" alt=""></a></li>
            <li class="imagen-hidden"><a href="#"><img src="/assets/img/blanco.png" alt=""></a></li>
            <li><a href="{{ route('index') }}">Inicio</a></li>
            <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
            <li><a href="{{ route('laminas') }}">Láminas de seguridad</a></li>
            <li><a href="{{ route('sobre') }}">Sobre nosotros</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
            <li><a href="{{ route('dashboard') }}" class="active">Intranet</a></li>
            <li><a href="#">Cesta</a></li>
        </ul>
    </div>
    <div class="logout">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <a href="#" onclick="this.closest('form').submit();"><img src="/assets/img-contactos/cerrar-sesion (1).png" alt=""></a>
    </form>
        <p>Cerrar sesión</p>
    </div>
    <section class="ingreso">
    <form action="{{ route('producto.store') }}" method="post" enctype="multipart/form-data">
      @csrf
          <input type="text" name="nombre" placeholder="Nombre del producto">
          <div id="nombre-error" class="text-danger">@error('nombre') {{ $message }} @enderror</div>
          <input type="number" name="valor" placeholder="Valor">
          <div id="valor-error" class="text-danger">@error('valor') {{ $message }} @enderror</div>
          <input type="file" name="imagen">
          <div id="imagen-error" class="text-danger">@error('imagen') {{ $message }} @enderror</div>
          <textarea name="descripcion" cols="30" rows="10" placeholder="Ingrese descripción"></textarea>
          <div id="descripcion-error" class="text-danger">@error('descripcion') {{ $message }} @enderror</div>
      <input type="submit" value="Ingresar" class="btn-ingresar">

      @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
    </form>
    </section>
    <section class="tabla">
        <table summary="Tabla de productos Autodraft">
            <thead>
              <tr>
                <th scope="col">ID producto</th>
                <th scope="col">Nombre del producto</th>
                <th scope="col">Valor del producto</th>
                <th scope="col">Descripción del producto</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
            <tr id="product-{{ $producto->id }}">
                <th scope="row">{{ $producto->id }}</th>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->valor }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>
                <a href="{{ route('modificar', ['id' => $producto->id]) }}">
                    <input type="button" class="modificar" value="Modificar" data-id="{{ $producto->id }}">
                </a>
                <td><input type="button" class="eliminar" value="Eliminar" data-id="{{ $producto->id }}">
            </tr>
            @endforeach
            </tbody>
          </table>
    </section>
</body>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
    $(document).ready(function () {
        // Function to handle form validation on form submit
        $('form').submit(function () {
            // Clear existing error messages
            $('.text-danger').empty();

            // Validate each input
            $('form input, form textarea').each(function () {
                var input = $(this);
                var name = input.attr('name');
                var errorContainer = $('#' + name + '-error');
                var errorMessage = input.siblings('.text-danger').text();

                if (errorMessage) {
                    errorContainer.html('<p class="text-danger">' + errorMessage + '</p>');
                }
            });
        });

        $('.eliminar').click(function() {
        var id = $(this).data('id');
        
        // Optimistically remove the row from the table
        var row = $('#product-' + id);
        row.remove();

            $.ajax({
                url: '/products/' + id,
                type: 'DELETE',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                error: function(response) {
                    // If there's an error, add the row back and show an error message
                    row.appendTo('table');
                    alert('Error: ' + response.responseText);
                }
            });
        });
    });
</script>


</html>