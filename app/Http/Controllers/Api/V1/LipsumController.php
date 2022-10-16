<?php

namespace App\Http\Controllers\Api\v1;

use Faker\Factory;
use App\Http\Controllers\Controller;

class LipsumController extends Controller
{
    public function index(int $g)
    {
        $faker = Factory::create();

        return response()->json([
            'value' => $faker->words($g, true)
        ]);
    }
}