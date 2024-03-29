<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit61f16d06b80c9a90fbbc348950b381aa
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

        spl_autoload_register(array('ComposerAutoloaderInit61f16d06b80c9a90fbbc348950b381aa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit61f16d06b80c9a90fbbc348950b381aa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit61f16d06b80c9a90fbbc348950b381aa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
