<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // arrange (prepare the world for the test)
    $employer = Employer::factory()->create();

    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // act (do the thing)
    $relatedEmployer = $job->employer;

    // assert (check the outcome)
    expect($relatedEmployer->is($employer))->toBeTrue();
});


// test drive development (TDD)

it('can have tags', function () {
    // arrange
    $job = Job::factory()->create();

    // act
    $job->tag('Frontend');

    // assert
    expect($job->tags)->toHaveCount(1);
});
