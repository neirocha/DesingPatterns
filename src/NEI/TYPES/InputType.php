<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 01/06/2015
 * Time: 19:32
 */

namespace NEI\TYPES;


use NEI\INTERFECES\InputTypeInterface;

class InputType extends AbstractFormulario implements InputTypeInterface
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


        $input = "<input type='{$this->getType()}' name='{$this->getName()}' class='{$this->getClass()}' required='{$this->getRequired()}' value='{$this->getValue()}' size='{$this->getSize()}'/>";
        //echo "<div>";
        echo $input;
        //echo "</div>";
    }
}
