<?php

namespace App\DTO;

use Carbon\Carbon;

readonly class Project
{
    /**
     * @param string[] $highlights
     */
    public function __construct(
        public string $name = '',
        public ?Carbon $startDate = null,
        public ?Carbon $endDate = null,
        public string $description = '',
        public array $highlights = [],
        public string $url = '',
    ){
    }

    public static function fromArray(array $data): self
    {
        $startDate = !empty($data['startDate'])
            ? Carbon::parse($data['startDate'])
            : null;

        $endDate = !empty($data['endDate'])
            ? Carbon::parse($data['endDate'])
            : null;

        $highlights = $data['highlights'] ?? [];

        return new self(
            name: $data['name'] ?? '',
            startDate: $startDate,
            endDate: $endDate,
            description: $data['description'] ?? '',
            highlights: $highlights,
            url: $data['url'] ?? '',
        );
    }
}
