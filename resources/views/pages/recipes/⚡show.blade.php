<?php

use Livewire\Component;
use App\Models\Recipe;

new class extends Component
{
    public Recipe $recipe;

    public function mount()
    {
        $this->recipe = Recipe::latest()->first();
    }
};
?>

<div>
    {{ $recipe->name }}
</div>
