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
                <h2 class="text-center">COMPRAS</h2>
            </div>
            <a href="./menu.php">Menu -> </a> <a href="#">Compras</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome do Comprador</th>
                        <th scope="col">Produto Comprado</th>
                        <th scope="col">Quantidade Comprada</th>
                        <th scope="col">Data de Compra</th>
                        <th scope="col" id="opcao" colspan="3">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $compras = $conn->getRowByQuery(
                        "SELECT c.*, p.descricao, cc.nome FROM compras c
                        INNER JOIN produtos p ON c.id_produto = p.id_produto
                        INNER JOIN clientes cc ON c.id_cliente = cc.id_cliente
                        WHERE c.deletado = 0"
                    );
                    // echo json_encode($usuarios);
                    foreach ($compras as $compra) {
                        echo "<tr>";
                        echo "<td> $compra[nome] </td>";
                        echo "<td> $compra[descricao] </td>";
                        echo "<td> $compra[qtd] </td>";
                        echo "<td> $compra[dt_compra] </td>";

                        echo "<td><a href='./Controller/Shopping/delete.php?buy=$compra[id_compra]'>Deletar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>