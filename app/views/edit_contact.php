<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
    <h3>Editar Contacto</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $data->id; ?>">
        <input type="text" name="nombre" value="<?php echo $data->nombre; ?>" placeholder="Nombre">
        <input type="text" name="telefono" value="<?php echo $data->telefono; ?>" placeholder="Teléfono">
        <input type="text" name="email" value="<?php echo $data->email; ?>" placeholder="Email">
        <input type="text" name="direccion" value="<?php echo $data->direccion; ?>" placeholder="Dirección">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
