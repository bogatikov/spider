<?php

namespace classes;


class Autoload
{
    public static function loadClass($class)
    {
        if (file_exists(__DIR__ . '/../' . $class . '.php')) {
            include __DIR__ . '/../' . $class . '.php';
        } else {
            throw new \Exception('Class ' . $class . ' not found', 0);
        }
    }
} 