<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'judul' => 'company',
            'sub_judul' => 'company profile',
            'description_1' => 'decription_1',
            'description_2' => 'decription_2',
            'strength_1' => 'strength_1',
            'strength_2' => 'strength_2',
            'strength_3' => 'strength_3',
            'strength_4' => 'strength_4',
        ]);
    }
}
