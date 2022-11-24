<?php

namespace Database\Seeders;

use App\Models\Model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::insert([
           ["brand_id" => 1, "title" => "iPhone 14"],
           ["brand_id" => 1, "title" => "iPhone 13"],
        ]);
    }
}
