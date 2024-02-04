<?php

declare (strict_types = 1);

namespace Book\Part1\Chapter2\Composition\User;

use Book\Part1\Chapter2\Composition\Person;

final class UserData {
    
    private int $id;
    private Person $person;
    
    public function __construct(int $id, Person $person) {
        
        $this->id = $id;
        $this->person = $person;
    }
    
    public function getId(): int {
        
        return $this->id;
    }
    
    public function getName(): string {
        
        return $this->person->getName();
    }
}