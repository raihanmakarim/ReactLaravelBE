<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\Invoice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = $this->faker->randomElements(['paid', 'unpaid', 'overdue']);
        return [
            'customer_id' => Customer::factory(),
            'billed_dated' => $this->faker->dateTimeThisDecade(),
            'paid_dated' => $status[0] == 'paid' ? $this->faker->dateTimeThisDecade() : NULL,
            'amount' => $this->faker->numberBetween(100,20000),
            'status' => $status[0],
        ];
    }
}
