<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['PHP', 'LARAVEL', 'HTML', 'CSS', 'BOOTSTRAP', 'JAVASCRIPT', 'VUE'];
        
        foreach($tags as $tag){
            DB::table('tags')->insert(['name' => $tag]);
        }
    }
}
