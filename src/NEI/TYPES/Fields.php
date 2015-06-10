<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 02/06/2015
 * Time: 14:10
 */

namespace NEI\TYPES;


use src\NEI\INTERFACES\AbstractFormularioInterface;

abstract class Fields
{
    protected $fields = array();

    public function adiciona(AbstractFormularioInterface $field)
    {
        $this->fields[] = $field;
        return $this;
    }

    public function getFields()
    {
        return $this->fields;
    }

}