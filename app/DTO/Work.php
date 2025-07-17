<?php

namespace App\DTO;

use Carbon\Carbon;

readonly class Work
{
    /**
     * @param string[] $highlights
     */
    public function __construct(
        public string $name = '',
        public string $position = '',
        public string $url = '',
        public ?Carbon $startDate = null,
        public ?Carbon $endDate = null,
        public string $summary = '',
        public array $highlights = [],
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
            position: $data['position'] ?? '',
            url: $data['url'] ?? '',
            startDate: $startDate,
            endDate: $endDate,
            summary: $data['summary'] ?? '',
            highlights: $highlights,
        );
    }
}
