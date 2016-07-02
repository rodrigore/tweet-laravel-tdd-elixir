<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TweetsController extends Controller
{
    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|min:5'
        ], [
            'body.required' => 'Error en el cuerpo del tweet'
        ]);

        return 'guardar seguro';
    }
}
