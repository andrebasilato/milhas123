<?php include("header.php"); ?>

<body>
    <div class="login-clean">
        <form method="POST" action="./Controller/Clients/logar.php">
            <h2 class="sr-only">Formulário de Login</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="login" id="login" placeholder="Login" autocomplete="off"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Senha"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">ENTRAR</button></div>
            <span class="forgot">Não tem cadastro?</span><a href="register.php" class="forgot"><b>CADASTRAR</b></a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#login').mask('000.000.000-00');
        })
    </script>

</body>

</html>