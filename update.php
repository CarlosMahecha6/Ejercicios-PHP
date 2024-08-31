<?php
    require_once('crud_libro.php');
    require_once('libro.php');
    $crud= new CrudLibro();
    $libro= new Libro();
    $libro=$crud->obtenerLibro($_GET['id']); 
?>
<html>
    <head>
        <title>Actualizar Libro</title>
    </head>
    <body>
        <form action='administrate_book.php' method='post'>
        <table>
            <tr>
                <input type='hidden' name='id' value='<?php	echo $libro->getId()?>'>
                <td>Nombre Libro:</td>
                <td> <input type='text' name='actualizar' value='actualizar'>
        </table>
        <input type='submit' value='Guardar'>
        <a href="index.php">Volver</a>
        </form>
    </body>
</html>