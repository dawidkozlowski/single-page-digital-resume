<?php

namespace App\DTO;

readonly class Language
{
    public function __construct(
        public string $language = '',
        public string $fluency = '',
    ){
    }

    public static function fromArray(array $data): self
    {
        return new self(
            language: $data['language'] ?? '',
            fluency: $data['fluency'] ?? '',
        );
    }
}
