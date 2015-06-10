<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 01/06/2015
 * Time: 21:06
 */
namespace NEI;


use NEI\INTERFECES\FormularioInterface;

class Formulario implements FormularioInterface
{
    public function creatField($type, $options = array())
    {


        $class = "src\\NEI\\TYPES\\".ucfirst(strtolower($type))."Type";


        if(!class_exists($class))
        {
           throw new \InvalidArgumentException('Não existe classe');
            // echo "claase inexistente";
        }

        $field = new $class();
        foreach($options as $kay => $value)
        {
            $setters = "set" . ucfirst($kay);
            if(method_exists($field, $setters))
            {
                $field->$setters($value);
            }
        }
        return $field;
    }


    public function render()
    {
        $formu = "<form action='formulario2.php' method='post'>";
        echo $formu;

        foreach($this->fields as $campo)
        {
            $campo->render();
        }

        echo "</form><hr>";
    }


}