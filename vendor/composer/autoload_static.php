<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite377829b05038fabbd2e1ebbd9f93959
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite377829b05038fabbd2e1ebbd9f93959::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite377829b05038fabbd2e1ebbd9f93959::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite377829b05038fabbd2e1ebbd9f93959::$classMap;

        }, null, ClassLoader::class);
    }
}
