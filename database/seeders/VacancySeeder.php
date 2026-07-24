<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
    public function run(): void
    {
        $vacancies = [
            [
                'reference_code' => 'SMR-ISR-001',
                'country' => 'Israel', 'country_code' => 'IL',
                'title' => 'Caregiver', 'category' => 'Caregiver',
                'summary' => 'Provide daily companionship and personal care support to elderly patients in a licensed home-care placement, with full employer coordination from Sameer Tours & Travels.',
                'requirements' => 'Prior caregiving/nursing aptitude preferred. Patience, compassion and physical fitness required.',
                'english_level' => 'Basic to good English communication preferred',
                'trc_assistance' => false, 'status' => 'open', 'sort_order' => 1,
            ],
            [
                'reference_code' => 'SMR-ISR-002',
                'country' => 'Israel', 'country_code' => 'IL',
                'title' => 'General Workers', 'category' => 'General Worker',
                'summary' => 'General duty roles across agriculture, packing and light industrial sites for verified Israeli employers.',
                'requirements' => 'Physically fit, willing to work in outdoor/factory conditions.',
                'english_level' => 'Good English communication preferred',
                'trc_assistance' => false, 'status' => 'open', 'sort_order' => 2,
            ],
            [
                'reference_code' => 'SMR-ISR-003',
                'country' => 'Israel', 'country_code' => 'IL',
                'title' => 'CNC Machine Operator', 'category' => 'Skilled Trade',
                'summary' => 'Operate and monitor CNC machinery on production lines for manufacturing employers in Israel.',
                'requirements' => 'ITI/diploma or hands-on CNC experience preferred.',
                'english_level' => 'Good English communication preferred',
                'trc_assistance' => false, 'status' => 'open', 'sort_order' => 3,
            ],
            [
                'reference_code' => 'SMR-ISR-004',
                'country' => 'Israel', 'country_code' => 'IL',
                'title' => 'Machine Operator', 'category' => 'Skilled Trade',
                'summary' => 'Machine operation roles across manufacturing and processing units.',
                'requirements' => 'Prior factory/machine-line experience preferred.',
                'english_level' => 'Good English communication preferred',
                'trc_assistance' => false, 'status' => 'open', 'sort_order' => 4,
            ],
            [
                'reference_code' => 'SMR-ISR-005',
                'country' => 'Israel', 'country_code' => 'IL',
                'title' => 'Welder', 'category' => 'Skilled Trade',
                'summary' => 'Structural and fabrication welding roles for verified construction and manufacturing employers.',
                'requirements' => 'Certified welding experience (Arc/MIG/TIG as applicable).',
                'english_level' => 'Good English communication preferred',
                'trc_assistance' => false, 'status' => 'open', 'sort_order' => 5,
            ],
            [
                'reference_code' => 'SMR-ISR-006',
                'country' => 'Israel', 'country_code' => 'IL',
                'title' => 'Electrician', 'category' => 'Skilled Trade',
                'summary' => 'Industrial and site electrical work for licensed employers in Israel.',
                'requirements' => 'ITI Electrician or equivalent trade certification.',
                'english_level' => 'Good English communication preferred',
                'trc_assistance' => false, 'status' => 'open', 'sort_order' => 6,
            ],
            [
                'reference_code' => 'SMR-ISR-007',
                'country' => 'Israel', 'country_code' => 'IL',
                'title' => 'Wood Carpenter', 'category' => 'Skilled Trade',
                'summary' => 'Carpentry and formwork roles across residential and commercial construction sites.',
                'requirements' => 'Prior carpentry/formwork experience preferred.',
                'english_level' => 'Good English communication preferred',
                'trc_assistance' => false, 'status' => 'open', 'sort_order' => 7,
            ],
            [
                'reference_code' => 'SMR-ISR-008',
                'country' => 'Israel', 'country_code' => 'IL',
                'title' => 'Aluminium Fabricator', 'category' => 'Skilled Trade',
                'summary' => 'Aluminium fabrication and installation for facade and interior contractors.',
                'requirements' => 'Prior aluminium fabrication experience preferred.',
                'english_level' => 'Good English communication preferred',
                'trc_assistance' => false, 'status' => 'open', 'sort_order' => 8,
            ],
            [
                'reference_code' => 'SMR-ARM-001',
                'country' => 'Armenia', 'country_code' => 'AM',
                'title' => 'Warehouse Jobs', 'category' => 'General Worker',
                'summary' => 'Warehouse loading, sorting and inventory support roles with verified Armenian employers.',
                'requirements' => 'Physically fit, willing to work shift schedules.',
                'english_level' => null,
                'trc_assistance' => true, 'status' => 'open', 'sort_order' => 9,
            ],
            [
                'reference_code' => 'SMR-ARM-002',
                'country' => 'Armenia', 'country_code' => 'AM',
                'title' => 'Helper Jobs', 'category' => 'General Worker',
                'summary' => 'General helper roles supporting production and site teams.',
                'requirements' => 'No prior experience required; on-site training provided.',
                'english_level' => null,
                'trc_assistance' => true, 'status' => 'open', 'sort_order' => 10,
            ],
        ];

        foreach ($vacancies as $vacancy) {
            Vacancy::updateOrCreate(['reference_code' => $vacancy['reference_code']], $vacancy);
        }
    }
}
