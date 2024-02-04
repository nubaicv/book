<?php

declare (strict_types = 1);

namespace Book\Part1\Chapter2\StaticAccess;

Class ChildClass extends ParentClass {
    
    protected const ZIP = '456';
    protected static string $foo = 'foozon';
    
}

