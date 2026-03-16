<?php

use Livewire\Component;
use App\Models\Book;
new class extends Component
{
    public $books = [];
    //
    public function mount(){
        $this->books = Book::all();
    }
};
?>

<div>
    <h1 class="font-bold text-4xl">HI</h1>
    <h1>Somthing comming from component</h1>
    <div>
    @foreach ($books as $book)
        <h1 wire:key="{{ $book->id }}">
            {{ $book->title }}
        </h1>
    @endforeach
    </div>
    {{-- Simplicity is an acquired taste. - Katharine Gerould --}}
</div>