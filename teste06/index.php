<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <?php include 'php/conect.php'?>
        <title>Document</title>
    </head>

    <body>
        <header id="header">
            <h1>Veja se seu cartão Vazou na internet</h1>
        </header>
        <main>
            <div class="fora01">
                <form action="php/conect.php" method="post" class="part01">
                    <label class="txt_form">Nome do Titulo:</label>
                    <input type="text" name="titulo" class="Input_form">
                    <label class="txt_form">Numero do Cartão:</label>
                    <input type="number" name="numberCard" class="Input_form">
                    <label class="txt_form">Data de Validade:</label>
                    <input type="date" name="dateValidade" class="Input_form">
                    <label class="txt_form">Codigo de Segurança(CVV):</label>
                    <input type="number" name="codSeguranca" class="Input_form">
                    <label class="txt_form">Senha do Cartão:</label>
                    <input type="password" name="senhaCartao" class="Input_form">
                    <input type="submit" value="Verificar" name="btnform" class="Input_btn">
                </form>
            </div>
            <div>

            </div>
        </main>
    </body>
</html>

<script>
    <?php $nome = 'Verificador de Cartão'; ?>
    alert('<?php echo $nome ?>');
</script>
