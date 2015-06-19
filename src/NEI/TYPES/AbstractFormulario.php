<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 01/06/2015
 * Time: 19:10
 */
namespace NEI\TYPES;



use NEI\INTERFECES\AbstractFormularioInterface;
use NEI\INTERFECES\RenderInterface;

abstract class AbstractFormulario implements AbstractFormularioInterface, RenderInterface

{
    protected $id;
    protected $name;
    protected $class;
    protected $value;
    protected $cols;
    protected $rows;
    protected $required;
    protected $size;
    protected $label;
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

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getCols()
    {
        return $this->cols;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function setCols($cols)
    {
        $this->cols = $cols;
        return $this;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
        return $this;
    }

    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    abstract public function render();


}