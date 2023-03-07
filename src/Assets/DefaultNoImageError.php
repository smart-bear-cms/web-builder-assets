<?php

namespace nguyenanhung\Platforms\WebBuilderSDK\AssetsServices\Assets;

class DefaultNoImageError
{
    public static function imagePath()
    {
        $path = __DIR__ . '/../../assets/image/system/error/';

        return realpath($path) . DIRECTORY_SEPARATOR;
    }

    public static function errorImage01()
    {
        return self::imagePath() . '404-1.jpg';
    }

    public static function errorImage02()
    {
        return self::imagePath() . '404-2.png';
    }

    public static function errorImage03()
    {
        return self::imagePath() . '404-3.png';
    }

    public static function errorImage04()
    {
        return self::imagePath() . '404-4.gif';
    }

    public static function errorImage05()
    {
        return self::imagePath() . '404-5.jpg';
    }

    public static function errorImage06()
    {
        return self::imagePath() . '404-6.jpg';
    }
}
