<?php

namespace Database\Factories;

use App\Models\subject;
use App\Models\UsersSubjects;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;



class UsersSubjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersSubjects::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        
        $usersId = DB::table('users')->get();
        

        $subjects = DB::table('subjects')->get();
        
        $teacherID  = $subjects->pluck('userId');
        $subjectId =  $subjects->pluck('id');
        
        return [
            'user_Id' => $this->faker->randomElement($teacherID) ,
            'subject_Id' => $this->faker->randomElement($subjectId) ,
            //
        ];
    }
}
