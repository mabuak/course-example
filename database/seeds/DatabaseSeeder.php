<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InsertDefaultStudent::class);
        $this->call(InsertDefaultInstructor::class);
        $this->call(InsertDefaultPayment::class);
    }
}
