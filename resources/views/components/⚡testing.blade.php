<?php

use Livewire\Component;
use App\Models\Book;
new class extends Component
{
    //
    // public $books;
    // public function mount(){
    //     $this->books = Book::all();
    // }
    public function getBookProperty(){
          return Book::limit(5)->get();
    }
};
?>

<div>
    <h1>THis is the name of All Books</h1>
    @foreach ($this->book as $book)
        <h1 wire:key="{{ $book->id }}">{{ $book->title }}</h1>
    @endforeach
    {{-- It is never too late to be what you might have been. - George Eliot --}}
</div>