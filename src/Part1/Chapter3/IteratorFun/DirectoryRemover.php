<?php

declare (strict_types = 1);

namespace Book\Part1\Chapter3\IteratorFun;

use RuntimeException;
use SplFileInfo;
use FilesystemIterator;

final class DirectoryRemover {
    
    public function removeDir(string $path): void {
        
        if(!\is_dir($path)) {
            
            return;
        }
        
        $traversable = $this->getIterator($path);
        foreach ($traversable as $item) {
            
            if ($item instanceof SplFileInfo === false) {
                throw new RuntimeException(
                        message: 'Iterator badly configured, must be set to return SplFileInfo objects with CURRENT_AS_FILEINFO'
                );
            }
            if ($item->isDir()) {
                //at this time we start to recurse
                $this->removeDir($item->getPathname());
                //then the directory is empty and we can remove it
                \rmdir($item->getPathname());
            }
            if ($item->isFile()) {
                \unlink($item->getPathname());
            }
        }
    }
    
    private function getIterator(string $path): FilesystemIterator {
        
        $flags = FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS;
        
        return new class() extends FilesystemIterator {
            
            use CurrentIsFileInfoTrait;
        };
    }
    
    
}