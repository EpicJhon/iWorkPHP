<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace iWorkPHP;

/**
 * Description of RouterRules
 *
 * @author Jhonjhon_123
 */
class RouterRules
{

    private $rules;

    function __construct()
    {
        $this->rules = new \stdClass();
    }

    public function getRules()
    {
        return $this->rules;
    }

    public function hasRule($name)
    {
        return property_exists($this->rules, $name);
    }

    public function getRule($name)
    {
        return $this->rules->$name;
    }

    public function setRule($name, $path, $pattern, $className, $classMethod)
    {
        $this->rules->$name = New RouterRule($path, $pattern, $className, $classMethod);
    }

}