<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function index()
    {
        $digits    = array_flip(range('0', '9'));
        $lowercase = array_flip(range('a', 'z'));
        $uppercase = array_flip(range('A', 'Z')); 
        $special   = array_flip(str_split('!@#$%^&*()_+=-}{[}]\|;:<>?/'));
        $combined  = array_merge($digits, $lowercase, $uppercase, $special);

        $password  = str_shuffle(array_rand($digits) . array_rand($lowercase) . array_rand($uppercase) . array_rand($special) . implode(array_rand($combined, rand(4, 8))));

        return response()->json(['value' => $password]);
    }
}