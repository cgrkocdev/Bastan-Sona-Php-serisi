<?php
    spl_autoload_register(function($className)
    {
        $classFile = __DIR__ . '/classes/' . strtolower($className) . '.php';
        if (file_exists($classFile))
            require $classFile;
    }
);

    var_dump(class_exists('test'));
?>