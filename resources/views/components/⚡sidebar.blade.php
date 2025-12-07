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

    public function selected($recipe) {
        return request()->is('recipes/'.$recipe->slug);
    }
};
?>

<nav class="sidebar">
    <h2 class="sro">Main navigation</h2>
    <div class="sidebar__section">
        <p class="sidebar__subtitle">Recipes</p>
        <ul class="sidebar__list">
        @foreach($recipes as $recipe)
            <li>
                <a href="{{ route('recipes.show', $recipe) }}" wire:navigate class="sidebar__link" data-selected="{{ $this->selected($recipe) }}">{{ $recipe->name }}</a>
            </li>
        @endforeach
        </ul>
    </div>
</nav>
