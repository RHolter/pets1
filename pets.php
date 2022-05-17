<?php
class Pet
{
    private $_name;
    private $_color;

    //Java: public Pet()
    //in JS
    function __construct()
    {
        $this->_name = "Tara";
        $this->_color = "silver";

    }

    function eat()
    {
        echo $this->_name . " is eating <br>";
    }

    function sleep()
    {
        echo $this->_name . " is sleeping <br>";
    }

    function talk() {
        echo $this->_name . " is talking <br>";
    }

}
