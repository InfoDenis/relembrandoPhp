<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd5154097290708dff89f28f7a9a4cba
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitcd5154097290708dff89f28f7a9a4cba::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitcd5154097290708dff89f28f7a9a4cba::$classMap;

        }, null, ClassLoader::class);
    }
}
