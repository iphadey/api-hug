<?php

namespace App\Http\Controllers\Api;

use Faker\Factory;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function index(): string
    {
        $faker = Factory::create();

        return $faker->creditCardDetails();
    }
}