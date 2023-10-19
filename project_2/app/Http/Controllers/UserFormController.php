<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showForm(Request $req) {
        $req->validate([
            'firstName' => 'required | min:3 | max:15',
            'lastName' => 'required',
            'email' => 'required | min:5 | max:40 | email'
        ]);
        return View('showuser', $req);
    }
}
