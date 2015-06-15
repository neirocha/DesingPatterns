<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Design Patterns</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
    <h1>Design Patterns</h1>
    <br>

    <div class="row">
        <div class="col-md-12 column">

            <table border="0">
                <tr><td><i><b>Nome:</b></i> <?php echo $_POST['nome'];?></td></tr>
                <tr><td><i><b>Email:</b></i> <?php echo $_POST['email'];?></td></tr>
                <tr><td><i><b>Assunto:</b></i> <?php echo $_POST['assunto'];?></td></tr>
                <tr><td><i><b>Mensagem:</b></i> <?php echo $_POST['mensagem'];?></td></tr>
            </table>

        </div>
    </div>
</div>

</body>
</html>