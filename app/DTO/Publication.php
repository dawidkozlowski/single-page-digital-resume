<?php

namespace App\DTO;

use Carbon\Carbon;

readonly class Publication
{
    public function __construct(
        public string $name = '',
        public string $publisher = '',
        public ?Carbon $releaseDate = null,
        public string $url = '',
        public string $summary = '',
    ){
    }

    public static function fromArray(array $data): self
    {
        $releaseDate = !empty($data['releaseDate'])
            ? Carbon::parse($data['releaseDate'])
            : null;

        return new self(
            name: $data['name'] ?? '',
            publisher: $data['publisher'] ?? '',
            releaseDate: $releaseDate,
            url: $data['url'] ?? '',
            summary: $data['summary'] ?? '',
        );
    }
}
