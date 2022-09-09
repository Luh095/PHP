<?php
/* Superglobais
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

// $GLOBALS
$x = 10;
$y = 15;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

// $_SERVER
echo $_SERVER['PHP_SELF']."br";
echo $_SERVER['SERVER_NAME']."br";
echo $_SERVER['SCRIPT_FILENAME']."br";
echo $_SERVER['DOCUMENT_ROOT']."br";
echo $_SERVER['SERVER_PORT']."br";
echo $_SERVER['REMOTE_ADDR']."br";

// $_POST
<html>
<body>
    <form action="dados.php" method="post">
    Nome: <input type="text" name="nome">
    Email: <input type="email" name="email">
    <button type="submit"> Enviar </button>
    </form>
</body>
</html>

// $_GET
<html>
<body>
    <form action="dados.php" method="get">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    <button type="submit"> Enviar </button>
    </form>

    <a href="dados.php?idade=25&sobrenome=Santos"> Enviar dados</a>
</body>
</html>

// Validações
<?
if(isset($_POST['enviar-formulario']))