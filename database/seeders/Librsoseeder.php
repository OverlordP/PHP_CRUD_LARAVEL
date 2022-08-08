<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Librsoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('libros')->insert(
                [[
                    'titulo'=> 'Caperucita',
                    'editorial'=>'corefo',
                    'isbn'=>'9841-343-143',
                    'precio'=>'50,00'

                ],[

                    'titulo'=> 'Baldor',
                    'editorial'=>'rubiños',
                    'isbn'=>'1234-423-972',
                    'precio'=>'29,00'
                ]]
        );
    }
}
