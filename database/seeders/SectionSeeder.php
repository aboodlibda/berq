<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    public function run()
    {
        Section::create([
            'section_1' => 1,
            'section_2' => 1,
            'section_3' => 1
        ]);
    }
}
