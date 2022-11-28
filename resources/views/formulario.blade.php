<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('enviarDatos') }}" method="post">
        @csrf
        <p>Su nombre: <input type="text" name="name" /></p>
        <p>Su Apellido: <input type="text" name="lastName" /></p>
        <p>Su edad: <input type="number" name="age" /></p>
        <p><input type="submit" /></p>
    </form>
</body>

</html>