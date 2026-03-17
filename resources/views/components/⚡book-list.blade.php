<?php

use Livewire\Component;
use App\Models\Book;
new class extends Component
{
    //
    public $books;

    public function mount(){
       $this->books =   Book::all();
    }
    // public function getBooksProperty(){
    //     $this->books = Book::all();
    // }
  
};
?>

<div class="max-w-6xl mx-auto grid grid-cols-1 my-4 md:grid-cols-2 gap-3">
     @foreach ($books as $book)
         <div wire:key="{{ $book->id }}" class="flex flex-col gap-3 rounded-2xl w-full bg-gray-500 px-4 py-5">
            <div class="p-2 rounded-md  text-2xl font-bold bg-linear-60 from-orange-300 to-orange-500 w-fit">
            <i class=" fa-solid fa-book-open"></i>
            </div>
            <h1 class="text-gray-200">{{ $book->title }}</h1>
            <h1>Author Name: {{ $book->author }}</h1>
            <div class="flex justify-between items-center">
            <span>Rating: {{ $book->rating }}</span>
            <button class="bg-red-500 py-2 px-5 rounded-md text-gray-200">Delete</button>
            </div>
         </div>
     @endforeach
    {{-- Simplicity is an acquired taste. - Katharine Gerould --}}
</div>