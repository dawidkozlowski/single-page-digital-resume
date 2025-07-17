<?php

namespace App\DTO;

readonly class Interest
{
    /**
     * @param string[] $keywords
     */
    public function __construct(
        public string $name = '',
        public array $keywords = [],
    ){
    }

    public static function fromArray(array $data): self
    {
        $keywords = $data['keywords'] ?? [];

        return new self(
            name: $data['name'] ?? '',
            keywords: $keywords,
        );
    }
}
