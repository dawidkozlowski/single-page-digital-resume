<?php

namespace App\DTO;

readonly class Skill
{
    /**
     * @param string[] $keywords
     */
    public function __construct(
        public string $name = '',
        public string $level = '',
        public array $keywords = [],
    ){
    }

    public static function fromArray(array $data): self
    {
        $keywords = $data['keywords'] ?? [];

        return new self(
            name: $data['name'] ?? '',
            level: $data['level'] ?? '',
            keywords: $keywords,
        );
    }
}
