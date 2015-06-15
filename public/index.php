<?php
define('CLASS_DIR', __DIR__ . "/../src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use \NEI;
/*
$form1 = new \NEI\Formulario();
$campo1 =$form1->creatField('Input', array('type'=>'text', 'name'=>'nome', 'size'=>'48', 'required'=>'required'));
$form1->adiciona($campo1);

$form2 = new \NEI\Formulario();
$campo2 =$form2->creatField('Input', array('type'=>'text', 'name'=>'email', 'size'=>'48', 'required'=>'required'));
$form2->adiciona($campo2);

$form3 = new \NEI\Formulario();
$campo3 =$form3->creatField('Input', array('type'=>'text', 'name'=>'assunto', 'size'=>'48', 'required'=>'required'));
$form3->adiciona($campo3);

$form4 = new \NEI\Formulario();
$campo4 =$form4->creatField('Textarea', array('cols'=>'50', 'rows'=>'6', 'name'=>'mensagem', 'required'=>'required'));
$form4->adiciona($campo4);

$form5 = new \NEI\Formulario();
$campo5 =$form5->creatField('Input', array('type'=>'submit', 'value'=>'Cadastrar'));
$form5->adiciona($campo5);
*/

$form = new \NEI\Formulario();

$br = $form->creatField('Br');
$label1 = $form->creatField('Label', array('text'=> 'Nome:'));
$label2 = $form->creatField('Label', array('text'=> 'Email:'));
$label3 = $form->creatField('Label', array('text'=> 'Assunto:'));
$label4 = $form->creatField('Label', array('text'=> 'Mesnsagem:'));
$campo1 =$form->creatField('Input', array('type'=>'text', 'name'=>'nome', 'size'=>'48', 'required'=>'required'));
$campo2 =$form->creatField('Input', array('type'=>'text', 'name'=>'email', 'size'=>'48', 'required'=>'required'));
$campo3 =$form->creatField('Input', array('type'=>'text', 'name'=>'assunto', 'size'=>'48', 'required'=>'required'));
$campo4 =$form->creatField('Textarea', array('cols'=>'50', 'rows'=>'6', 'name'=>'mensagem', 'required'=>'required'));
$campo5 =$form->creatField('Input', array('type'=>'submit', 'value'=>'Cadastrar'));
   $form->adiciona($label1)
       ->adiciona($br)
        ->adiciona($campo1)
        ->adiciona($br)
        ->adiciona($label2)
       ->adiciona($br)
        ->adiciona($campo2)
        ->adiciona($br)
        ->adiciona($label3)
       ->adiciona($br)
        ->adiciona($campo3)
        ->adiciona($br)
        ->adiciona($label4)
       ->adiciona($br)
        ->adiciona($campo4)
        ->adiciona($br)
        ->adiciona($campo5);



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
       <br>

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