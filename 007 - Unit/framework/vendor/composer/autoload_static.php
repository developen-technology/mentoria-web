<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite380f30ebf83f32f89bd524bef262136
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite380f30ebf83f32f89bd524bef262136::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite380f30ebf83f32f89bd524bef262136::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite380f30ebf83f32f89bd524bef262136::$classMap;

        }, null, ClassLoader::class);
    }
}
