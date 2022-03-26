<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProjectDetail;

class ProjectDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectDetail::factory()
            ->count(1)
            ->create([
                "title"=>"TimeLeft",
                "subtitle"=>"Track Time To Reach Your Goal"
            ]);
    }
}
