<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Avaliação</title>
</head>
<body>
  <div class="container">
    <h2>Avalie o seu serviço</h2>
    <form action="Create Avaliacao.php" method="post">
      <div class="stars">
        <input type="radio" name="rating" id="Estrela1" value="1"><label for="Estrela1"></label>
        <input type="radio" name="rating" id="Estrela2" value="2"><label for="Estrela2"></label>
        <input type="radio" name="rating" id="Estrela3" value="3"><label for="Estrela3"></label>
        <input type="radio" name="rating" id="Estrela4" value="4"><label for="Estrela4"></label>
        <input type="radio" name="rating" id="Estrela5" value="5"><label for="Estrela5"></label>
      </div>
      <button type="submit">Enviar Avaliação</button>
    </form>
  </div>
</body>
</html>
