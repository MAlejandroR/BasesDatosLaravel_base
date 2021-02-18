<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      DB::table("Pesronas")->insert([
            'name' => "Manolo".Str::random(3),
            'apellido' => "Romero".Str::random(10).'@gmail.com',
            'dni' => '1313'.Str::random(1,1000),
            'direccion' => "Mi casa ".Str::random(1,1000),
            'email' => "manuel@gmail.com",
      ]);

    }
}
