<html>
    <head>
        <title>Ingresar Libro</title>
    </head>
    <header>
    Ingresar los datos del libro
    </header>
    <form actions='administrate_book.php' method='post'>
        <table>
            <tr>
                <td>Nombre Libro:</td>
                <td> <input type='text' name='nombre'></td>
                </tr>
                <input type='hidden' name='insertar' value='insertar'>
        </table>
        <input type='submit' value='Guardar'>
        <a href="index.php">Volver</a>
    </form>
</html>