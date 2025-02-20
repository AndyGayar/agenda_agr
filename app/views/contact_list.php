<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
    <h1>Contactos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>                
                <th>Email</th>
                <th>Dirección</th>
                <th>Fecha Creación</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $contacto): ?>
                <tr>
                    <td><?php echo $contacto->nombre; ?></td>
                    <td><?php echo $contacto->telefono; ?></td>
                    <td><?php echo $contacto->email;?></td>
                    <td><?php echo $contacto->direccion; ?></td>
                    <td><?php echo $contacto->fecha_creacion; ?></td>
                    <td><a href="/agenda_agr/contacto/edit/<?php echo $contacto->id; ?>">Editar</a></td>
                    <td><a href="/agenda_agr/contacto/delete/<?php echo $contacto->id; ?>">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button><a href="/agenda_agr/contacto/new">Nuevo contacto</a></button>
</body>
</html>