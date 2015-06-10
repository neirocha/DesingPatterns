<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 01/06/2015
 * Time: 20:09
 */

namespace NEI\TYPES;


use NEI\INTERFECES\InputTypeInterface;


class SubmitType extends AbstractFormulario implements InputTypeInterface
{
    protected $type;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function render()
    {
        $submit = "<input type='{$this->getType()}' class='{$this->getClass}' value='{$this->value}' />";
        echo $submit;
    }



}