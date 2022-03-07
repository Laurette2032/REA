<?php

class app
{

    static  function AutoLoader()
    {
        foreach (glob(__DIR__ . '/../controllers/*.php') as $filename) {
            require $filename;
            echo $filename;
        }
        foreach (glob(__DIR__ . '/../models/*.php') as $filename) {
            require $filename;
        }
    }
}
