<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kursi;

class KursController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'nosaukums' => 'required|string|max:255',
            'paskaidrojums' => 'required',
            'banera_adrese' => 'required|url',
            'cilveku_skaits' => 'required|integer|min:0',
            ]); 

            Kursi::create($validated);
            dd('Ieraksts tika saglabats');
    }

    public function index()
    {
        $kursi = Kursi::all();
        return response()->json($kursi);
    }

}

