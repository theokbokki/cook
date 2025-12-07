<?php

use Livewire\Component;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Collection;

new class extends Component
{
    public Collection $recipes;

    public function mount()
    {
        $this->recipes = Recipe::all();
    }
};
?>

<div>
    <ul>
    @foreach($recipes as $recipe)
        <li>
            <a href="{{ route('recipes.show', $recipe) }}" wire:navigate>{{ $recipe->name }}</a>
        </li>
    @endforeach
    </ul>
</div>
