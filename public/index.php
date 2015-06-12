<?php
define('CLASS_DIR', __DIR__ . "/../src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use \NEI;

$form = new \NEI\Formulario();


$nome = $form->creatField("Label", array('text' => 'Nome: ', 'class' =>  'col-md-1 control-label'));
$campo1 =$form->creatField('Input', array('type'=>'text', 'required'=>'required'));
$form->adiciona($nome)->adiciona($campo1);
/*
$nome = $form->creatField("Label", array('text' => 'Email: ', 'class' =>  'col-md-1 control-label'));
$campo2 =$form->creatField('Input', array('type'=>'text', 'required'=>'required'));
$form->adiciona($nome)->adiciona($campo2);

*/

   ?>

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

       <div class="row">
           <div class="col-md-12 column">

<?php

$form->render();

?>

            </div>
        </div>
    </div>

</body>
</html>