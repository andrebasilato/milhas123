<?php include("header.php"); 

include("./Classes/Connection.php");
$conn = new \Connection();

session_start();

$cpf = $_SESSION['login'];

$id = $conn->getRowByQuery("SELECT id_cliente FROM clientes WHERE cpf = '$cpf'");


// foreach($id as $i){
//     var_dump($i); echo "testeeeee <br/>";
// }
// var_dump($id[0]['id_cliente']);
$_SESSION['id_cliente'] = $id[0]['id_cliente'];
// var_dump($_SESSION);


?>

<body>
    <div class="features-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">MENU</h2>
                <p class="text-center">Escolha a opção que deseja</p>
            </div>
            <div class="row features">

                <div class="col-sm-6 col-lg-3 item"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Produtos</h3>
                    <p class="description">Nossos produtos</p><a href="products.php" class="learn-more">Visualizar</a>
                </div>

                <div class="col-sm-6 col-lg-3 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Usuários</h3>
                    <p class="description">Nossos usuários</p><a href="clients.php" class="learn-more">Visualizar</a>
                </div>

                <div class="col-sm-6 col-lg-3 item"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Compras</h3>
                    <p class="description">Nossos compras</p><a href="shopping.php" class="learn-more">Visualizar</a>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>