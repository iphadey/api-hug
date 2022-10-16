<?php

namespace App\Http\Controllers\Api\v1;

use Faker\Factory;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $faker = Factory::create();

        return response()->json([
            'title' => $faker->realText(50),
            'description' => $faker->realText(150),
            'content' => $faker->realText(9999),
        ]);
    }
}