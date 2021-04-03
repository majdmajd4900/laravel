<?php

namespace Database\Factories;

use App\Models\subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = subject::class;

   

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users  = User::where('role' , 'teacher')->pluck('id');
        echo $users;
    

        return [
            'name' => $this->faker->name,
            'userId'=> $this->faker->unique()->randomElement($users->toArray()),
            'description' => $this->faker->text(),
            'code' =>$this->faker->countryCode,
            'creditValue' => $this->faker->numberBetween(1,5),
            
            
            //
        ];
    }
}
