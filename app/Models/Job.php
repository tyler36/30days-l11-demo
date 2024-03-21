<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Directory',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 2,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ],
        ];
    }

    public static function find($id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
    }
}
