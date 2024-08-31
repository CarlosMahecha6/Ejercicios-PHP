<?php
    require_once('crud_libro.php');
    require_once('libro.php');
    $crud= new CrudLibro();
    $libro= new Libro();
    $libro=$crud->mostrar(); 
?>
<html>
    <head>
        <title>Mostrar Libro</title>
    </head>
    <body>
        <table border=1>
            <head>
                <td>Nombre</td>
                <td>Actualizar</td>
                <td>Eliminar</td>
            </head>
            <body>
                <?php	foreach ($listaLibros as $libro) {?>
                <tr>
                    <td><?php echo $libro->getNombre() ?></td>
                    <td><a href="update.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a></td>
                    <td><a href="administrate_book.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a></td>
                </tr>
        </table>
        <a href="index.php">Volver</a>
    </body>
</html>