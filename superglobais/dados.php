<?php
// post
$nome = $_POST['nome'];
$email = $_POST['email'];

echo "Seu nome é $nome e seu email é $email. <br>";

var_dump($_POST);


// get
$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Seu nome é $nome e seu email é $email. <br>";

var_dump($_GET);


// enviando outra informação
echo $_GET['idade']."<br>".$_GET['sobrenome'];

var_dump($_GET);