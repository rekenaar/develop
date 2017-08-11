<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08846c2f1d3dd9862d966645a3bcbdf3
{
    public static $files = array (
        'a54e80f5db489fa488747ec62d294261' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EONConsulting\\Storyline\\MindMap\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EONConsulting\\Storyline\\MindMap\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'EONConsulting\\Storyline\\MindMap\\Classes\\CourseStorylineMap' => __DIR__ . '/../..' . '/src/Classes/CourseStorylineMap.php',
        'EONConsulting\\Storyline\\MindMap\\Facades\\StorylineMindMap' => __DIR__ . '/../..' . '/src/Facades/StorylineMindMap.php',
        'EONConsulting\\Storyline\\MindMap\\StorylineMindMap' => __DIR__ . '/../..' . '/src/StorylineMindMap.php',
        'EONConsulting\\Storyline\\MindMap\\StorylineMindMapServiceProvider' => __DIR__ . '/../..' . '/src/StorylineMindMapServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08846c2f1d3dd9862d966645a3bcbdf3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08846c2f1d3dd9862d966645a3bcbdf3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit08846c2f1d3dd9862d966645a3bcbdf3::$classMap;

        }, null, ClassLoader::class);
    }
}