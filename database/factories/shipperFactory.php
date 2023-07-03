<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Shipper;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipperFactory extends Factory
{
    /**
     * 
     *
     * @var string
     */
    protected $model = Shipper::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->company,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'fk_user_id' => User::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (Shipper $shipper) {
            // Additional actions after creating a Shipper
        });
    }
}