<?php

use Illuminate\Database\Seeder;

use App\Models\Payment;
use App\Models\Course;
use App\Models\Student;

class InsertDefaultPayment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Payment::class)->create();
    }
}
