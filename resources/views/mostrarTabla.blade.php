<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border 1px>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <tr>
            <th><?php echo $person['name']?></th>
            <th><?php echo $person['lastName']?></th>
            <th><?php echo $person['age']?></th>
        </tr>
    </table>
    
</body>
</html>