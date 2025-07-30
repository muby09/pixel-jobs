<?php

// use App\Models\Employer;
// use App\Models\Job;

// it('belongs to an employer', function () {
//     $employer = Employer::factory()->create();
//     $job = Job::factory()->create([
//         'employer_id' => $employer->id,
//     ]);

//     //act
//     expect($job->employer->is($employer))->toBeTrue();

// });





namespace Tests\Unit;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */

    public function test_example(): void
    {
        $this->assertTrue(true);
    }
}
