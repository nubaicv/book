<?php

declare (strict_types = 1);

namespace Book;

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'vendor/autoload.php';

//-------------------------------------------------------




//use Book\Part1\Chapter3\Attributes\{Foo, Bar, Baz, WrittenByAttribute};
//use ReflectionClass;
//use RuntimeException;
//
//foreach ([Foo::class, Bar::class, Baz::class] as $class) {
//    
//    $reflectionAttributes = (new ReflectionClass($class))->getAttributes(WrittenByAttribute::class);
//    
//    $reflectionAttribute = $reflectionAttributes[0] ?? throw new RunTimeException("Failed getting attribute for " . $class);
//    
//    $writtenBy = $reflectionAttribute->newInstance();
//    
//    echo "Cass " . $class . " was written by " . $writtenBy->getName() . "<br>";
//}

//-------------------------------------------------------

//use Book\Part1\Chapter3\ReflectionFun\Kid;
//use ReflectionObject;
//
//$instance = new Kid('Chris', 10);
//$reflection = new ReflectionObject($instance);
//
//echo "<pre>";
//foreach ($reflection->getMethods() as $method) {
//    
//    echo "\n {$method->name}";
//}
//echo "</pre>";
//
//echo "The kid name is " . $instance->getName() . ".<br>";
//
//$method = $reflection->getMethod("changeName");
//$method->setAccessible(true);
//$method->invoke($instance, "Arianne");
//
//echo "And now the kid name is " . $instance->getName() . ".<br>";