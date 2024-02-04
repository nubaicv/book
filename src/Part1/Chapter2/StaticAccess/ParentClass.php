<?php

declare (strict_types = 1);

namespace Book\Part1\Chapter2\StaticAccess;

Class ParentClass {
    
    private const ZIP = '123';
    private static string $foo = 'foo';
    
    public static function getStringSelf() {
        return self::$foo . self::ZIP;
    }
    
    public static function getStringStatic() {
        return static::$foo . static::ZIP;
    }
}
