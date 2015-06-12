<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 11/06/2015
 * Time: 19:14
 */

namespace NEI\TYPES;

use NEI\INTERFECES\LabelTypeInterface;


class LabelType extends AbstractFormulario implements LabelTypeInterface
{
    protected $text;

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function getText()
    {
        return $this->text;
    }

    public function render()
    {
        $label1 = "<label class='{$this->getClass()}'>{$this->getText()}";
        $label2 = "</label>";

        echo $label1;

        if(count($this->fields))
        {
            foreach($this->fields as $campo)
            {
                $campo->render();
            }
        }
        echo $label2;
    }



}