<?php

namespace App\Http\Controllers\Api\v1;

use Faker\Factory;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function index()
    {
        $faker = Factory::create();

        return $faker->creditCardDetails();
    }
}