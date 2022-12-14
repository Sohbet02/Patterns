<?php

namespace Upgrader\Patterns;

/**
 * Registry Pattern usage: safe alternative for global variables
 */
 class Registry 
 {
    protected static $data = array();

    /**
     * Setting the key->value pair to registry
     */
    public static function set(string $key, $value)
    {
        self::$data[$key] = $value;
    }

    /**
     * Getting the value with key from registry
     */
    public static function get(string $key)
    {
        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }

    /**
     * Removing pair from registry
     */
    public static function removeRegistry($key)
    {
        if(array_key_exists($key, self::$data)) {
            unset(self::$data[$key]);
        }
    }
 }