<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
        <h2>Formulario de registro</h2>
        <form action="fomulario.php" method="POST">
            <table>
                <tr class="field">
                    <td class="label">Nombre:</td>
                    <td><input type="text" name="nombre" required></td>
                </tr>
                <tr>
                    <td class="label">Contraseña</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td class="label">Genero</td>
                    <td class="radio">
                        <input type="radio" name="genero"  value="femenino" required> Femenino
                        <input type="radio" name="genero"  value="masculino" required> Masculino
                    </td>
                </tr>
                <tr>
                    <td class="label">Correo</td>
                    <td>
                        <input type="email" name="correo" required>
                    </td>
                </tr>
                <tr>
                    <td class="label">Materia</td>
                    <td>
                        <select class="seleccion" name="materia" required>
                            <option value="calculo">Cálculo</option>
                            <option value="fisica">Física</option>
                            <option value="historia">História</option>
                            <option value="base de datos">Base de datos</option>
                            <option value="programacion">Programación</option>
                        </section>
                    </td>
                </tr>
                <tr>
                    <td class="label">Teléfono</td>
                    <td>
                        <input type="tel" name="phone" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Enviar" name="enviar"></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>