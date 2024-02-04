<?php

declare (strict_types=1);

namespace Book\Part1\Chapter3\IteratorFun;

final class Config {

    /** @var string */
    private string $baseDir;

    /** @var string[] */
    private array $subDirs;

    public function __construct(string $baseDir, string ...$subDirs) {

        $this->baseDir = $baseDir;

        foreach ($subDirs as $subDir) {

            if (\str_starts_with($subDir, $this->baseDir) === false) {

                $subDir = "{$this->baseDir}/{$subDir}";
            }
            $this->subDirs[] = $subDir;
        }
    }

    /** @return string[] */
    public function getSubDirs(): array {

        return $this->subDirs;
    }
    
    /** @return string */
    public function getBaseDir(): string {
        
        return $this->baseDir;
    }
}
