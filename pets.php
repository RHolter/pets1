<?php
class Pet
{
    private $_name;
    private $_color;

    //Java: public Pet()
    // any parameter($color) with a default value is optional
    // any parameter($name) without oa default is required
    function __construct($name, $color="?")
    {
        $this->_name = $name;
        $this->_color = $color;

    }

    function eat()
    {
        echo $this->_name . " is eating <br>";
    }

    function sleep()
    {
        echo $this->_name . " is sleeping <br>";
    }

    function talk()
    {
        echo $this->_name . " is talking <br>";
    }

    function getName()
    {
        return $this->_name;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function getColor()
    {
        return $this->_color;
    }

    function setColor($color){
        $this->_color =$color;
    }




}
