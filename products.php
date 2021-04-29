<?php
include("header.php");
include("./Classes/Connection.php");

$conn = new \Connection();
session_start();
// var_dump($_SESSION);
?>

<body>
    <div class="features-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">PRODUTOS</h2>
            </div>
            <a href="./menu.php">Menu -> </a> <a href="#">Produtos</a>
            <p class="new_product" style="float: right;"><a href="./newproduct.php">Novo Produto</a></p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome do Produto</th>
                        <th scope="col" id="opcao" colspan="3">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $produtos = $conn->getRowByQuery("SELECT * FROM produtos");
                    // echo json_encode($usuarios);
                    foreach ($produtos as $produto) {
                        echo "<tr>";
                        echo "<td> $produto[descricao] </td>";
                        echo "<td><a href='buyprod.php?product=$produto[id_produto]'>Comprar</a></td>";
                        echo "<td><a href='editprod.php?product=$produto[id_produto]'>Editar</a></td>";
                        echo "<td><a href='./Controller/Products/delete.php?product=$produto[id_produto]'>Deletar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>