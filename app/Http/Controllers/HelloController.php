<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = [
            ['name' => 'あべ', 'mail' => 'abe@example.com'],
            ['name' => 'しん', 'mail' => 'shin@example.com'],
            ['name' => 'ぞう', 'mail' => 'zou@example.com'],
        ];
        return view('hello.index')->with('data',$data);
    }
}
