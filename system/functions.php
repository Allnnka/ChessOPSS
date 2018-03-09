<?php
    function _fGetController()
    {
        if(isset($_GET['controller']))
        {
            return $_GET['controller'];
        }
        else
        {
            return "index";
        }
    }

    function _fRunController($controller)
    {
        require_once 'controllers/' . $controller . '.php';
    }
