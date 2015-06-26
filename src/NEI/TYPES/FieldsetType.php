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

    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    public function render()
    {
        echo "<fieldset><legend>{$this->legend}</legend>";
        foreach($this->fields as $campo)
        {
            $campo->render();
        }

        echo "</fieldset>";
    }


}