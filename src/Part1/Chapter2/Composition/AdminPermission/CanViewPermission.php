<?php

declare (strict_types = 1);

namespace Book\Part1\Chapter2\Composition\AdminPermission;

final class CanViewPermission implements AdminPermissionInterface {
    
    private $allowed;
    
    public function __construct(bool $allowed) {
        
        $this->allowed = $allowed;
    }
    
    public function getPermName(): string {
        
        return self::CAN_VIEW;
    }
    
    public function isAllowed(): bool {
        
        return $this->allowed;
    }
}