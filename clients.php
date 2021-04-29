<?php
include("header.php");
include("./Classes/Connection.php");

$conn = new \Connection();
?>

<body>
    <div class="features-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">USUÁRIOS</h2>
            </div>
            <a href="./menu.php">Menu -> </a> <a href="#">Usuários</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data Cadastro</th>
                        <th scope="col" id="opcao" colspan="2">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $usuarios = $conn->getRowByQuery("SELECT * FROM clientes");
                    // echo json_encode($usuarios);
                    foreach ($usuarios as $usuario) {
                        echo "<tr>";
                        echo "<td> $usuario[nome] </td>";
                        echo "<td> $usuario[telefone] </td>";
                        echo "<td> $usuario[dt_cadastro] </td>";
                        echo "<td><a href='edit.php?user=$usuario[id_cliente]'>Editar</a></td>";
                        echo "<td><a href='./Controller/Clients/delete.php?user=$usuario[id_cliente]'>Deletar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- <script>
        function Confirm() {
            var action = confirm("Deseja realmente deletar o registro?");
            if (action === true) {
                document.location.reload(true);
            } else {
                console.log("teste");
            }
        }
    </script> -->

</body>