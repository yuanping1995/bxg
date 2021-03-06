<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a091ff6ef59d7a1c7b0b45691b22945
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
            'think\\' => 6,
        ),
        'W' => 
        array (
            'Wechat\\' => 7,
        ),
        'Q' => 
        array (
            'QQpay\\' => 6,
        ),
        'O' => 
        array (
            'OSS\\' => 4,
        ),
        'A' => 
        array (
            'Alipay\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/../..' . '/thinkphp/library/think',
        ),
        'Wechat\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat',
        ),
        'QQpay\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/qqpay-php-sdk/QQpay',
        ),
        'OSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS',
        ),
        'Alipay\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/alipay-php-sdk/Alipay',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a091ff6ef59d7a1c7b0b45691b22945::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a091ff6ef59d7a1c7b0b45691b22945::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
