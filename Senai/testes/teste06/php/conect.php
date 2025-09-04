<?php
// Configurações do Banco de Dados
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db_servidor = 'cartoes';

// Criando a conexão
$conect = new mysqli($servidor, $usuario, $senha, $db_servidor);

// Verificando a conexão
if ($conect->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conect->connect_error);
}

// Verificando se os dados foram enviados pelo formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pegando os dados do formulário
    $titulo = $_POST['titulo'] ?? '';
    $numberCard = $_POST['numberCard'] ?? '';
    $dateValidade = $_POST['dateValidade'] ?? '';
    $codSeguranca = $_POST['codSeguranca'] ?? '';
    $senhaCartao = $_POST['senhaCartao'] ?? '';

    // Verificando se os campos não estão vazios
    if (!empty($titulo) && !empty($numberCard) && !empty($dateValidade) && !empty($codSeguranca) && !empty($senhaCartao)) {
        try {
            // Preparando a inserção com segurança
            $stmt = $conect->prepare("INSERT INTO cartao (nomedotitulo, numerodocartao, datadavalidade, codseguranca, senha) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $titulo, $numberCard, $dateValidade, $codSeguranca, $senhaCartao);

            // Executando a inserção
            if ($stmt->execute()) {
                echo "Cartão cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o cartão: " . $stmt->error;
            }

            // Fechando a consulta e a conexão
            $stmt->close();
            $conect->close();
        } catch (Exception $e) {
            echo "Erro ao inserir os dados: " . $e->getMessage();
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>
