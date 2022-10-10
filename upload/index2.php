<html>
<body>

<?php
if(isset($_POST['enviar-formulario'])):
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $quantidadeArquivos = count($_FILES['arquivos']['name']);
    $contador = 0;

    while ($contador < $quantidade):

    $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)):
      $pasta = "arquivos/";
      $temporario = $_FILES['arquivo']['tmp_name'][$contador];
      $novoNome = uniqid(). ".$extensao";

      if(move_uploaded_file($temporario, $pasta.$novoNome)):
        $mensagem = "Upload feito com sucesso para $pasta.$novoNome<br>";
      else:
        $mensagem = "Erro ao enviar o arquivo $temporario";
      endif;
    else:
        $mensagem = "$extensao não é permitida <br>";
        endif;

    endwhile;

endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
       
    <input type="file" name="arquivo">
    <input type="submit" name="enviar-formulario">
</form>

<html>
<body>