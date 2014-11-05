<?php

namespace BrownPaperBag;

/**
 * Class OS
 * @package Deane
 */
class OS{

    /**
     * @const string
     */
    const OS_LINUX = 'Linux';
    /**
     * @const string
     */
    const OS_MAC_OS_X = 'Mac OS X';
    /**
     * @const string
     */
    const OS_UNKNOWN = 'Unknown';
    /**
     * @const string
     */
    const OS_WINDOWS = 'Windows';

    /**
     * @return string
     */
    public static function getOS(){

        switch(true){
            
            case stristr(PHP_OS, 'LINUX'):
                
                return self::OS_LINUX;

            case stristr(PHP_OS, 'DAR'):
                
                return self::OS_MAC_OS_X;

            case stristr(PHP_OS, 'WIN'):
                
                return self::OS_WINDOWS;
            
            default:
                
                return self::OS_UNKNOWN;

        }

    }

    /**
     * @return bool
     */
    public static function isLinux(){

        return self::getOS() == self::OS_LINUX;

    }

    /**
     * @return bool
     */
    public static function isMac(){

        return self::getOS() == self::OS_MAC_OS_X;

    }

    /**
     * @return bool
     */
    public static function isWindows(){

        return self::getOS() == self::OS_WINDOWS;

    }

    /**
     * @return bool
     */
    public static function is32bit(){

        return PHP_INT_MAX == 2147483647;

    }

    /**
     * @return bool
     */
    public static function is64bit(){

        return PHP_INT_MAX == 9223372036854775807;

    }

}