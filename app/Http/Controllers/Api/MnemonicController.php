<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use FurqanSiddiqui\BIP39\BIP39;
use App\Http\Controllers\Controller;

class MnemonicController extends Controller
{
    public function index(Request $request)
    {
        $mnemonic = BIP39::Generate($request->input('length', 8));

        return response()->json([
            'word' => $mnemonic->words,
            'entropy' => $mnemonic->entropy,
        ]);
    }
}