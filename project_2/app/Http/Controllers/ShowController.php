<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show() {
        return 'Kontroler ShowController';
    }

    public function showData() {
        $data =  [
            'firstName' => 'Janusz',
            'lastName' => 'Radek',
            'city' => 'Vancouver',
            'hobby' => ['siatkowka', 'zuzel', 'skoki narciarskie']
        ];
        return View('data', $data);
    }
}
