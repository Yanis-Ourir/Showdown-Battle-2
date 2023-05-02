<?php

function autoloader($class_name)
{
    require 'class/' . $class_name . '.php';
}
