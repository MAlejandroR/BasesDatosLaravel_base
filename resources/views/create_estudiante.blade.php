<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>



<form action="{{route("estudiante.store")}}" method="POST">

    @csrf
    Nombre <input type="text" name="nombre" id=""><br/>
    Apellido <input type="text" name="apellido" id=""><br/>
    DNI <input type="text" name="dni" id=""><br/>
    direccion <input type="text" name="direccion" id=""><br/>
    nombre_usuario <input type="text" name="nombre_usuario" id=""><br/>
    password <input type="text" name="password" id=""><br/>
    <button class="btn btn-success">Guardar</button>
    <a class="btn btn-primary" href="{{route("estudiante.index")}}">Volver al listado</a>
</form>

</body>
</html>
