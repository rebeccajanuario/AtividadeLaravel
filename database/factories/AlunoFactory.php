<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ra' => $this->faker->randomDigit(),
            'nome' => $this->faker->name(),
            'dtNascto' => $this->faker->date('Y-m-d','2010-12-31'),
            'telefone' => $this->faker->randomDigit(),
            'responsavel' => $this->faker->name(),
            'turma' => $this->faker->randomLetter()
        ];
    }
}
