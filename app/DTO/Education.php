<?php

namespace App\DTO;

use Carbon\Carbon;

readonly class Education
{
    /**
     * @param string[] $courses
     */
    public function __construct(
        public string $institution = '',
        public string $url = '',
        public string $area = '',
        public string $studyType = '',
        public ?Carbon $startDate = null,
        public ?Carbon $endDate = null,
        public string $score = '',
        public array $courses = [],
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

        $courses = $data['courses'] ?? [];

        return new self(
            institution: $data['institution'] ?? '',
            url: $data['url'] ?? '',
            area: $data['area'] ?? '',
            studyType: $data['studyType'] ?? '',
            startDate: $startDate,
            endDate: $endDate,
            score: $data['score'] ?? '',
            courses: $courses,
        );
    }
}
