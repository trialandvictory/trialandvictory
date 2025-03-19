<?php

use App\Http\Middleware\ExcludeInProduction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function () {
    Route::get("/", "index")->name("index");
    Route::get("/over-ons", "about_us")->name("about_us");
    Route::get("/diensten", "services")->name("services"); # Wat doen we
    Route::get("/prijzen", "pricing")->name("pricing"); # Tarieven
    Route::get("/portfolio", "portfolio")->name("portfolio"); # Portfolio
    Route::get("/contact", "contact")->name("contact"); # Contact
    Route::post("/contact_send", "contact_send")->name("contact_send"); # Contact Versturen
    // fixme: middleware voor local-only proberen:
    Route::get("/elements", "elements")->name("elements")->middleware(ExcludeInProduction::class);
    Route::get("/generic", "generic")->name("generic")->middleware(ExcludeInProduction::class);
});

