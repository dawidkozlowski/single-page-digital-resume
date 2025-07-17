<?php

namespace App\DTO;

readonly class Resume
{
    /**
     * @param Work[] $work
     * @param Volunteer[] $volunteer
     * @param Education[] $education
     * @param Award[] $awards
     * @param Certificate[] $certificates
     * @param Publication[] $publications
     * @param Skill[] $skills
     * @param Language[] $languages
     * @param Interest[] $interests
     * @param Reference[] $references
     * @param Project[] $projects
     */
    public function __construct(
        public Basics $basics,
        public array $work = [],
        public array $volunteer = [],
        public array $education = [],
        public array $awards = [],
        public array $certificates = [],
        public array $publications = [],
        public array $skills = [],
        public array $languages = [],
        public array $interests = [],
        public array $references = [],
        public array $projects = [],
    ){
    }

    public static function fromArray(array $data): self
    {
        $basics = isset($data['basics']) ? Basics::fromArray($data['basics']) : new Basics();

        $work = [];
        if (isset($data['work']) && is_array($data['work'])) {
            foreach ($data['work'] as $workData) {
                $work[] = Work::fromArray($workData);
            }
        }

        $volunteer = [];
        if (isset($data['volunteer']) && is_array($data['volunteer'])) {
            foreach ($data['volunteer'] as $volunteerData) {
                $volunteer[] = Volunteer::fromArray($volunteerData);
            }
        }

        $education = [];
        if (isset($data['education']) && is_array($data['education'])) {
            foreach ($data['education'] as $educationData) {
                $education[] = Education::fromArray($educationData);
            }
        }

        $awards = [];
        if (isset($data['awards']) && is_array($data['awards'])) {
            foreach ($data['awards'] as $awardData) {
                $awards[] = Award::fromArray($awardData);
            }
        }

        $certificates = [];
        if (isset($data['certificates']) && is_array($data['certificates'])) {
            foreach ($data['certificates'] as $certificateData) {
                $certificates[] = Certificate::fromArray($certificateData);
            }
        }

        $publications = [];
        if (isset($data['publications']) && is_array($data['publications'])) {
            foreach ($data['publications'] as $publicationData) {
                $publications[] = Publication::fromArray($publicationData);
            }
        }

        $skills = [];
        if (isset($data['skills']) && is_array($data['skills'])) {
            foreach ($data['skills'] as $skillData) {
                $skills[] = Skill::fromArray($skillData);
            }
        }

        $languages = [];
        if (isset($data['languages']) && is_array($data['languages'])) {
            foreach ($data['languages'] as $languageData) {
                $languages[] = Language::fromArray($languageData);
            }
        }

        $interests = [];
        if (isset($data['interests']) && is_array($data['interests'])) {
            foreach ($data['interests'] as $interestData) {
                $interests[] = Interest::fromArray($interestData);
            }
        }

        $references = [];
        if (isset($data['references']) && is_array($data['references'])) {
            foreach ($data['references'] as $referenceData) {
                $references[] = Reference::fromArray($referenceData);
            }
        }

        $projects = [];
        if (isset($data['projects']) && is_array($data['projects'])) {
            foreach ($data['projects'] as $projectData) {
                $projects[] = Project::fromArray($projectData);
            }
        }

        return new self(
            basics: $basics,
            work: $work,
            volunteer: $volunteer,
            education: $education,
            awards: $awards,
            certificates: $certificates,
            publications: $publications,
            skills: $skills,
            languages: $languages,
            interests: $interests,
            references: $references,
            projects: $projects,
        );
    }
}
