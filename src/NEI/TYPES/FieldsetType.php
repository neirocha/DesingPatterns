<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 19/06/2015
 * Time: 20:25
 */

namespace NEI\TYPES;


use NEI\INTERFECES\FieldsetTypeInterface;


class FieldsetType extends Fields implements FieldsetTypeInterface
{
    protected $legend;
    protected $field;

    public function setLegend($legend)
    {
        $this->legend = $legend;
        return $this;
    }

    public function getLegend()
    {
        return $this->legend;
    }

    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    public function getField()
    {
        $fieldset = "<fieldset><legend>{$this->legend}</legend>";
        foreach($this->fields as $field) {
            $fieldset .= $field->getField();
        }
        $fieldset .= "</fieldset>";
    }



}