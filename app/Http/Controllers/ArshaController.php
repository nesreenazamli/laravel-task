<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArshaController extends Controller
{

    function index() {
        return view("arsha-files.index");
    }

    function inner_page() {
        return view("arsha-files.inner_page");
    }

    function portfolio_details() {
        return view("arsha-files.portfolio_details");
    }


}
