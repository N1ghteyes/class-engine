<?php

namespace apexl\ClassEngine\Traits;

/**
 * Singleton trait to implements Singleton pattern in any classes where this trait is used.
 * @See https://devforest.com/2019/03/30/php-singleton-trait-and-using-it-in-a-class/
 */

trait Singleton
{
    protected static $_instance = array();

    /**
     * Protected class constructor to prevent direct object creation.
     */
    protected function __construct()
    {
    }

    /**
     * Prevent object cloning
     */
    final protected function __clone()
    {
    }

    /**
     * To return new or existing Singleton instance of the class from which it is called.
     * As it sets to final it can't be overridden.
     *
     * @return self Singleton instance of the class.
     */
    final public static function getInstance()
    {
        /**
         * Returns name of the class the static method is called in.
         */
        $called_class = get_called_class();
        if (! isset(static::$_instance[ $called_class ])) {
            static::$_instance[ $called_class ] = new $called_class();
        }
        return static::$_instance[ $called_class ];
    }
}
