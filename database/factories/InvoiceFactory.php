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
            'invoice_date' => $this->faker->date(),
            'billed_date' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $status == 'paid' ? $this->faker->dateTimeThisDecade() : NULL,

            'amount' => $this->faker->numberBetween(100,20000),
            'status' => $status,
        ];
    }
}
