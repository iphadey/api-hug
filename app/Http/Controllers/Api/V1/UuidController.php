<?php

namespace App\Http\Controllers\Api\v1;

use Faker\Factory;
use App\Http\Controllers\Controller;

class UuidController extends Controller
{
    public function index()
    {
        $faker = Factory::create();

        return response()->json([
            'value' => $faker->uuid(),
        ]);
    }
}