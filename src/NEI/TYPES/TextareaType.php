<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 01/06/2015
 * Time: 20:45
 */

namespace NEI\TYPES;


class TextareaType extends AbstractFormulario
{
    protected $textarea;

    public function getTextarea()
    {
        return $this->textarea;
    }


    public function setTextarea($textarea)
    {
        $this->textarea = $textarea;
        return $this;
    }

    public function render()
    {
        $textareas = "</label><textarea name='{$this->getName()}' cols='{$this->getCols()}' rows='{$this->getRows()}' class='{$this->getClass()}'>{$this->getValue()}</textarea>";
        echo $textareas;
    }


}