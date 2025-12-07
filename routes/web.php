<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;

Route::livewire('/recipes/{recipe}', 'pages::recipes.show')
    ->name('recipes.show')
    ->missing(fn () => redirect()->route('recipes.show', Recipe::latest()->first()));

Route::fallback(fn () => redirect()->route('recipes.show', Recipe::latest()->first()));
