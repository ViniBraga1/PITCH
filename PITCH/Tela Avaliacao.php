<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avaliação</title>
</head>
<body>
  <?php require ("Conexao.php"); ?>
  <div class="container">
    <h2>Avalie o seu serviço</h2>
    <form action="Create Avaliacao.php" method="post">
      <input type="hidden" name="idMotorista" value="<?php echo htmlspecialchars($_GET['idMotorista']); ?>">
      <div class="stars">
        <input type="radio" name="estrela" id="1" value="1"><label for="1">1</label>
        <input type="radio" name="estrela" id="2" value="2"><label for="2">2</label>
        <input type="radio" name="estrela" id="3" value="3"><label for="3">3</label>
        <input type="radio" name="estrela" id="4" value="4"><label for="4">4</label>
        <input type="radio" name="estrela" id="5" value="5"><label for="5">5</label>
      </div>
      <button type="submit">Enviar Avaliação</button>
    </form>
    <form action="Tela Site.php">
      <button type="submit">Agora Não</button>
    </form>
  </div>
</body>
</html>
