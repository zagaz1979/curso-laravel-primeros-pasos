<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custon</title>
</head>
<body>
    
    <h1> <?php echo $msj ?> </h1>
    <h1> <?= $msj ?> </h1>

    <!-- Blade -->
    <h1> {{ $msj }} - {{ $edad }} </h1> 

</body>
</html>