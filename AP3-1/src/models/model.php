<?php

namespace src\models;
class Model
{
    private $data;

    public function __construct()
    {
        $this->data = array(
            "title" => "MVC Sencillo PHP",
            "keywords" => "arquitectura de software, poo, mvc, php",
            "description" => "ponemos en práctica el MVC en PHP",
            "content" => "El contenido del presente ejercicio corresponde a la creación de
            un modelo vista controlador, MVC en adelante, mediante el lenguaje
            de programación PHP de una forma sencilla y haciendo uso de los
            conocimientos previos que tienen los alumnos."
        );
    }

    public function getData()
    {
        return $this->data;
    }
}
