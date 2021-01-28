<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $data = [];
        for ($i = 0; $i < 25; $i++) {
            $data[] = [
                'project_id' => $faker->numberBetween(1, 25),
                'category_id' => $faker->numberBetween(1, 25),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ];
        }

        DB::table('project_category')->insert($data);
    }
}
