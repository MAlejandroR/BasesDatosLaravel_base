<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create("es_ES");
        return [
            'name'=>$faker->name,
            'apellido'=>$faker->name,
            'dni'=>$faker->dni,
            'direccion'=>$faker->address,
            'email'=>$faker->email,
            'nombre_usuario'=>$faker->userName
//            'nombre_usuario'=>"Nombre usuario ".random_int(1,1000000),'name'=>"nombre".random_int(1,50),
//            'apellido'=>"Apellido".random_int(1,50),
//            'dni'=>random_int(1,1000000),
//            'direccion'=>"Apellido".random_int(1,50),
//            'email'=>random_int(1,1000000),
//            'nombre_usuario'=>"Nombre usuario ".random_int(1,1000000),
            //
        ];
    }
}
