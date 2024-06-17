<?php
require ('conexao.php');

if (isset($_GET["idCliente"])) {
    $id = $_GET["idCliente"];

    // Função para listar todos os registros do banco de dados
    function listarRegistros($pdo, $id) {
        $sql = "SELECT * FROM Cliente WHERE idCliente = $id";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($pdo, $id);
        foreach ($registros as $registro) {
            if ($registro['idCliente'] == $id) {
                $aux = true;
            }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Dados</h1>
    <?php if (isset($aux)) : ?>
        <form action="Update Cliente.php" method="post"> 
            <div class="form-group">
            <input type="hidden" name="idCliente" value="<?php echo $registro['idCliente']; ?>">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="informe o nome" value="<?php echo $registro['nome']; ?>" required>
                <label>Email</label>
                <input type="email" class="form-control" name="email" name="email" placeholder="informe o email" value="<?php echo $registro['email']; ?>" required>
                <label>CPF</label>
                <input type="text" class="form-control" name="cpf" placeholder="informe o cpf" value="<?php echo $registro['cpf']; ?>" required>
                <label>Sexo:</label>
                <input type="radio" id="M" name="sexo" value="M" value="<?php echo $registro['sexo']; ?>" required>
                <label for="M">Masculino</label>
                <input type="radio" id="F" name="sexo" value="F" value="<?php echo $registro['sexo']; ?>" required>>
                <label for="F">Feminino</label>
                <input type="radio" id="O" name="sexo" value="O" value="<?php echo $registro['sexo']; ?>" required>>
                <label for="O">Outro</label>
                <label>Endereço</label>
                <input type="text" class="form-control" name="endereco" placeholder="informe o endereço" value="<?php echo $registro['endereco']; ?>" required>>
                <label>Número</label>
                <input type="text" class="form-control" name="numero" placeholder="informe o número" value="<?php echo $registro['numero']; ?>" required>>
                <label>Complemento</label>
                <input type="text" class="form-control" name="complemento" placeholder="informe o complemento" value="<?php echo $registro['complemento']; ?>" required>>
                <label>Bairro</label>
                <input type="text" class="form-control" name="bairro" placeholder="informe o bairro" value="<?php echo $registro['bairro']; ?>" required>>
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade" placeholder="informe a cidade" value="<?php echo $registro['cidade']; ?>" required>>
                <label>Estado</label>
                <select name="UF" name="UF" class="form-control" value="<?php echo $registro['UF']; ?>" required>>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php else : ?>
        <p>Usuario não encontrado.</p>
    <?php endif; ?>
</body>
</html>
