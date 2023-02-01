<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * , mixed>
     * 
     * @var string, mixed>
     */
    protected $model = Customer::class;
    /**
     * Define the model's default state.
     *
     * , mixed>
     * 
     * @return array, mixed>
     */

    
    public function definition()
    {
        

        return [
            'name' => $this->faker->name,
            'number_id' => $this->faker->numberBetween(100000000,999999999),
            'dob' => $this->faker->date(),
            'email' => $this->faker->unique()->email(),
        ];            
        
    }
}
