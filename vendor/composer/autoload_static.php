<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04f79051e67917166a42e92bf5b17be7
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/MyApp',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04f79051e67917166a42e92bf5b17be7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04f79051e67917166a42e92bf5b17be7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04f79051e67917166a42e92bf5b17be7::$classMap;

        }, null, ClassLoader::class);
    }
}
