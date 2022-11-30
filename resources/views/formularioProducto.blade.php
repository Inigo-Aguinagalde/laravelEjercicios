<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('procesaForm3') }}" method="post">
        @csrf
        
        <p>Nombre producto: <input type="text" name="producto" value="{{ old('producto') }}"/></p>
        @error('producto') 
        <div style="color: red;">{{$message}}</div>
        @enderror
        <p><input type="submit" /></p>
    </form>
</body>

</html>