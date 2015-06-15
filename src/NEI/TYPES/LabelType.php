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
        echo "<label class='{$this->getClass()}'>{$this->getText()}";
    }



}