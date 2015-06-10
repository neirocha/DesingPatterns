<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 01/06/2015
 * Time: 20:01
 */
namespace src\NEI\INTERFACES;

interface AbstractFormularioInterface
{
    public function setId($id);
    public function setName($name);
    public function setClass($class);
    public function setValue($value);
    public function setCols($cols);
    public function setRows($rows);
    public function setRequired($required);
    public function setSize($size);

}