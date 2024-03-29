<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52833a9e5d42b01157128880a7bd53aa
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52833a9e5d42b01157128880a7bd53aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52833a9e5d42b01157128880a7bd53aa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
