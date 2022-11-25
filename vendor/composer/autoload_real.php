<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit96f6fc2170ae3f33ca882f569b41873c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit96f6fc2170ae3f33ca882f569b41873c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit96f6fc2170ae3f33ca882f569b41873c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit96f6fc2170ae3f33ca882f569b41873c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}