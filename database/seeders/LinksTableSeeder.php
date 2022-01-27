<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SQL
        // INSERT INTO links (link , linkCode) 
        // VALUES ( "https://www.youtube.com/watch?v=kCl7j82sZ_8&list=RDjXohY3fgC7k&index=3" , "code13" );

        // query Builder

        DB::table('links')->insert([
            'link' => 'https://www.youtube.com/watch?v=kCl7j82sZ_8&list=RDjXohY3fgC7k&index=3',
            'linkCode'=>'code14',
        ]);
    }
}
