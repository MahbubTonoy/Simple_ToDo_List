<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProjectDetail;
use Illuminate\Support\Facades\DB;

class ProjectDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_details')->update([
            "title"=>"TimeLeft",
            "subtitle"=>"Track Time To Reach Your Goal"
        ]);
    }
}
