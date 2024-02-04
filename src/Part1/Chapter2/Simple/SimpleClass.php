<?php

declare (strict_types = 1);

namespace Book\Part1\Chapter2\Simple;

require_once 'SimpleCustomer.php';

Class SimpleClass {
    
    public function __construct(public string $name = "Ana") {
        
        \var_dump(new SimpleCustomer);
        \var_dump(new \DateTime);
    }
}