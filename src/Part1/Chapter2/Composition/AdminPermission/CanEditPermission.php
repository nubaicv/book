<?php

declare (strict_types = 1);

namespace Book\Part1\Chapter2\Composition\AdminPermission;

final class CanEditPermission implements AdminPermissionInterface {
    
    private $allowed;
    
    public function __construct(bool $allowed) {
        
        $this->allowed = $allowed;
    }
    
    public function getPermName(): string {
        
        return self::CAN_EDIT;
    }
    
    public function isAllowed(): bool {
        
        return $this->allowed;
    }
}