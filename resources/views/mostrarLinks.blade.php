<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @for ($i = 1;$i<=100; $i++)
         <a href="{{ url('consultar/'. $producto['producto'] . '/'.$i) }}">Producto/{{$producto['producto']}}/{{$i}}</a><br><br>
    @endfor




</body>

</html>