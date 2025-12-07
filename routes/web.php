<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/recipes/{recipe}', 'pages::recipes.show');
