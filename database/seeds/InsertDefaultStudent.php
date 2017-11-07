<?php

use Illuminate\Database\Seeder;

use App\Models\Student;

class InsertDefaultStudent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Student::class, 10)->create();
    }
}
