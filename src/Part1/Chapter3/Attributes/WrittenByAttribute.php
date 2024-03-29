<?php

declare (strict_types = 1);

namespace Book\Part1\Chapter3\Attributes;

use Attribute;

#[Attribute]
final class WrittenByAttribute {
    
    public function __construct(private string $name) {
    }
    
    public function getName(): string {
        
        return $this->name;
    }
}