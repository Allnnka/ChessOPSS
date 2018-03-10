<?php
    include 'system/functions.php';
    include 'model.php';
    $controller = _fGetController();
    _fRunController($controller);
    DBConnection();
