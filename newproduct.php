<?php
include("header.php");
include("./Classes/Connection.php");

$conn = new \Connection();

// echo $_GET['user'];

$produtos = $conn->getProdById($_GET['user']);

// echo json_encode($usuarios);

?>

<body>
<a href="./menu.php">Menu -> </a> <a href="./products.php">Produtos -> </a> <a href="">Novo Produto</a>
    <div class="contact-clean">
        <form method="post" action="./Controller/Products/insert.php">
            <h2 class="text-center">NOVO PRODUTO</h2>
            
            <?php include("formproducts.php"); ?>
            
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Inserir</button>
    </div>
    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>