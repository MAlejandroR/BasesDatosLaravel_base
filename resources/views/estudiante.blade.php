<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="estudiante" method="GET">
    @csrf
    <input type="submit" value="Ver todos los Estudiantes">
</form>
<form action="estudiante" method="GET">
    @csrf
    <input type="submit" value="Crear un estudiante">
</form>
<h1>Listado de Estdiantes</h1>
@foreach($estudiantes as $estudiante)
    <form action="estudiante" method="GET">
        @csrf
    {{ $estudiante->nombre }} <input type="submit" value="Ver estiante">
    </form>
@endforeach
</body>
</html>
