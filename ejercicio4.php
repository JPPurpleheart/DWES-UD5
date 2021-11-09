<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>session.use_cookies</td>
            <td>boolean - especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente. Por defecto es 1 (habilitado).</td>
        </tr>
        <tr>
            <td>session.use_only_cookies</td>
            <td>boolean - session.use_only_cookies especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. Habilitar este ajuste previene ataques que impican pasar el id de sesión en la URL. Este ajuste fue añadido en PHP 4.3.0. Por defecto es 1 (habilitado) desde PHP 5.3.0.</td>
        </tr>
        <tr>
            <td>session.save_handler</td>
            <td>string - session.save_handler define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión. Por defecto es files. Observe que las extensiones individuales pueden registrar sus propios gestores save_handler; los gestores registrados se pueden obtener a nivel de instalación consultando phpinfo(). Véase también session_set_save_handler().</td>
        </tr>
        <tr>
            <td>session.name</td>
            <td>string - session.name specifica el nombre de la sesión que se usa como nombre de cookie. Sólo debería contener caracteres alfanuméricos. Por defecto es PHPSESSID. Véase también session_name().</td>
        </tr>
        <tr>
            <td>session.auto_start</td>
            <td>boolean - session.auto_start especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición. Por defecto es 0 (deshabilitado).</td>
        </tr>
        <tr>
            <td>session.cookie_lifetime</td>
            <td>integer - session.cookie_lifetime especifica el tiempo de vida en segundos de la cookie que es enviada al navegador. El valor 0 significa "hasta que el navegador se cierre". Por defecto es 0. Véase también session_get_cookie_params() y session_set_cookie_params().</td>
        </tr>
        <tr>
            <td>session.gc_maxlifetime</td>
            <td>integer - session.gc_maxlifetime especifica el número de segudos transcurridos después de que la información sea vista como 'basura' y potencialmente limpiada. La recolección de basura puede suceder durante el inicio de sesiones (dependiendo de session.gc_probability y session.gc_divisor).</td>
        </tr>
    </table>
</body>
</html>