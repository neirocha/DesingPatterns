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
    protected $fieldset;

    public function getFieldset()
    {
        return $this->fieldset;
    }

    public function setFieldset($fieldset)
    {
        $this->fieldset = $fieldset;
        return $this;

    }
    public function render()
    {
        echo '<fieldset>';

    }


}