<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    $factory->define(User::class, function (Faker $faker){
        ;
        $now = Carbon::now();
        return [
            'fullname' => $this->faker->name(),
            'gender' => $this->faker->numberBetwee(1,2),
            'email' => $this->faker->unique()->safeEmail(),
            'postcode' =>$this->faker->regexify(‘[1-9]{3}-[0-9]{4}‘)
            'address'=>$this->faker->regexify(‘[1-9]{3}-[0-9]{4}‘)
            'building_name'=>$this->faker->prefecture->city
            'opinion'=> $this->faker->realText(120),
            'created_at'=>$now,
            'updated_at'=>$now,
        ];
    })
}
