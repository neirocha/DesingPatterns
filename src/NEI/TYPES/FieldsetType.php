<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 19/06/2015
 * Time: 20:25
 */

namespace NEI\TYPES;


use NEI\INTERFECES\FieldsetTypeInterface;

class FieldsetType extends AbstractFormulario implements FieldsetTypeInterface
{
    protected $legend;
    protected $fields = array();
    protected $field;


    public function getField()
    {
        return $this->field;
    }

    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }
    public function setLegend($legend)
    {
        $this->legend = $legend;
        return $this;
    }

    public function getLegend()
    {
        return $this->legend;
    }
    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($field)
    {
        $this->fields[] = $field;

    }
    
//17099621554
    public function render()
    {
        echo "<fieldset><legend>{$this->legend}</legend>";
        foreach($this->fields as $field)
        {
            $field->render();
        }

        echo "</fieldset>";
    }


}