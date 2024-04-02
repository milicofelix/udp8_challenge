<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('pt_BR');

        return [
            'nome' => $faker->name,
            'cpf' => $faker->cpf(false),
            'data_nascimento' => $faker->date('Y-m-d', '-18 years'),
            'sexo' => $faker->randomElement(['M', 'F']),
            'endereco' => $faker->streetAddress,
            'estado' => $faker->stateAbbr,
            'cidade' => $faker->city,
        ];
    }
}
