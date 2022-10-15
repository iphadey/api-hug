<?php

namespace App\Http\Controllers\Api;

use Faker\Factory;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(): string
    {
        $faker = Factory::create();

        return response()->json([
            'name' => $faker->email(),
            'email' => $faker->userName(),
            'phone' => $faker->phoneNumber(),
            'password' => $faker->password(),
        ]);
    }
}