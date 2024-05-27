<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <h2 style="text-align: center;">CADASTRO DE CLIENTE</h2>
    <?php require ("Conexao Cliente.php"); ?>
    <div class="container">
        <form action="Create Cliente.php" method="post"> 
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="informe o nome">
                <label>Email</label>
                <input type="email" class="form-control" name="email" name="email" placeholder="informe o email">
                <label>CPF</label>
                <input type="text" class="form-control" name="cpf" placeholder="informe o cpf">
                <label>Sexo:</label>
                <input type="radio" id="M" name="sexo" value="M">
                <label for="M">Masculino</label>
                <input type="radio" id="F" name="sexo" value="F">
                <label for="F">Feminino</label>
                <input type="radio" id="O" name="sexo" value="O">
                <label for="O">Outro</label>
                <div>
                <label>Endereço</label>
                </div>
                <input type="text" class="form-control" name="endereco" placeholder="informe o endereço">
                <label>Número</label>
                <input type="text" class="form-control" name="numero" placeholder="informe o número">
                <label>Complemento</label>
                <input type="text" class="form-control" name="complemento" placeholder="informe o complemento">
                <label>Bairro</label>
                <input type="text" class="form-control" name="bairro" placeholder="informe o bairro">
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade" placeholder="informe a cidade">
                <label>Usuário</label>
                <input type="text" name="usuario" placeholder="Usuário" required>
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>