<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function () {
    Route::get("/", "index")->name("index");
    Route::get("/about-us", "about_us")->name("about_us");
    // fixme: add the following pages: Wat doen we / Tarieven / Portfolio / Contact

    // fixme: middleware voor local-only proberen:
    Route::get("/elements", "elements")->name("elements");
});
