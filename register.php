<?php include("header.php"); ?>

<body>
    <div class="contact-clean">
        <form method="post" action="./Controller/Clients/register.php">
            <h2 class="text-center">CADASTRO</h2>
            <?php include("form.php"); ?>
            <button type="button" id="show_password" name="show_password" class="fa fa-eye-slash" aria-hidden="true">MOSTRAR SENHA</button></div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
                <a href="index.php">Logar</a>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#cpf').mask('000.000.000-00');
            $('#tel').mask('(00) 00000-0000');
        })


        jQuery(document).ready(function($) {

            $('#show_password').hover(function(e) {
                e.preventDefault();
                if ($('#password').attr('type') == 'password') {
                    $('#password').attr('type', 'text');
                    $('#show_password').attr('class', 'fa fa-eye');
                } else {
                    $('#password').attr('type', 'password');
                    $('#show_password').attr('class', 'fa fa-eye-slash');
                }
            });

        });
    </script>
</body>

</html>