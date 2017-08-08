<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad287b79bf53c2d8092f4cbc50553c32
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        'c226c25794146328500eabe7758865f0' => __DIR__ . '/../..' . '/src/Http/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'E' => 
        array (
            'EONConsulting\\PHPSaasWrapper\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'EONConsulting\\PHPSaasWrapper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad287b79bf53c2d8092f4cbc50553c32::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad287b79bf53c2d8092f4cbc50553c32::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitad287b79bf53c2d8092f4cbc50553c32::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
