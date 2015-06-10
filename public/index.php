<?php
define('CLASS_DIR', __DIR__ . "/../src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use \NEI;

$form = new \NEI\Formulario();


$campo1 =$form->creatField('Input', array('type'=>'text', 'required'=>'required'));
$form->adiciona($campo1);

$form->render();

   ?>


<body background="#225566">
   <div class="container">
       <div class="row">
           <div class="col-md-12 column">



            </div>
        </div>
    </div>