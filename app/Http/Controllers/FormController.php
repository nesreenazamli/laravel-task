<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function form_data(Request $request) {
        $request -> validate([
            "name" => "required|min:3|max:10",
            "email" => "required|email",
            "subject" => "required",
            "message" => "required",
        ]);

        return view("arsha-files.form_data");
    }
}
