<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Automobiliai;

use Faker\Generator as Faker;

class AutomobiliaiFactory extends Factory
{

    protected $model = Automobiliai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        $v = $this->faker->vehicleArray();

        return [
            'modelis' => $v['model'],
            'marke' => $v['brand'],
            'numeris' => $this->faker->unique()->bothify('#######'),
        ];
    }
    
}