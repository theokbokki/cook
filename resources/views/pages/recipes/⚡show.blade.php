<?php

use Livewire\Component;
use App\Models\Recipe;

new class extends Component
{
    public Recipe $recipe;

    public function mount($recipe)
    {
        $this->recipe = $recipe;
    }
};
?>

<div>
    {{ $recipe->name }}
</div>
