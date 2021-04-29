<?php
include("header.php");
include("./Classes/Connection.php");

$conn = new \Connection();

// echo $_GET['user'];

$produtos = $conn->getProdById($_GET['product']);

// echo json_encode($usuarios);

?>

<body>
<a href="./menu.php">Menu -> </a> <a href="./products.php">Produtos -> </a> <a href="">Editar Produto</a>
    <div class="contact-clean">
        <form method="post" action="./Controller/Products/edit.php">
            <h2 class="text-center">EDITAR</h2>
            
            <?php include("formproducts.php"); ?>
            <!-- <input class="form-control" type="text" name="user" hidden id="user" value="<?= $_GET['product'] ?>" required> -->
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Alterar</button>
    </div>
    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>