<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 01/06/2015
 * Time: 21:21
 */

namespace NEI\INTERFECES;


interface FormularioInterface
{

    public function creatField($type, $options = array());
    public function render();

}