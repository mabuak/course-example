<?php

use Illuminate\Database\Seeder;

use App\Models\Instructor;

class InsertDefaultInstructor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Instructor::class, 5)->create()->each(function ($i) {
            $i->course()->save(factory(App\Models\Course::class)->make());
        });
    }
}
