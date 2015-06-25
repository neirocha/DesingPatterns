<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 19/06/2015
 * Time: 20:37
 */

namespace NEI\INTERFECES;


interface FieldsetTypeInterface
{
    public function setLegend($legend);
    public function setFields($fields);
    public function setFieldset($fieldset);
    public function setField($field);
    public function render();



}