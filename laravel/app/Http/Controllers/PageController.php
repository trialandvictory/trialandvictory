<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    public function index() {
        return view("welcome");
    }

    public function elements() {
        return view("elements");
    }

    public function about_us() {
        return view("about_us");
    }
}
