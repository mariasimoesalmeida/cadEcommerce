<?php
include_once ('controller/conexao.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <header>
        <div class="center">
            <h1>Cadastro de Produto</h1>
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <form action="" method="post">
            Nome: <input type="text" name="nome"><br>
            Descrição: <input type="text" name="descricao"><br>
            Estoque: <input type="number" name="estoque"><br>
            Preço: <input type="number" name="preco" min="0.00" max="100000.00" step="0.01"><br>
            Categoria:
            <select name="seleciona_categoria" id="">
                <option value="">Selecione</option>
                <?php
                $resultado_categoria = "SELECT * FROM  categoria";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                while ($row_categorias = mysqli_fetch_assoc($resultcategoria)) {
                    ?>

                    <option value="<?php echo $row_categorias['IDCATEGORIA']; ?>"><?php echo $row_categorias['DESCRICAO']; ?>
                    </option>

                <?php
                }
                ?>
            </select>
        </form>
    </section>
</body>

</html>