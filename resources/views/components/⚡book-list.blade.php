<?php

use Livewire\Component;
use App\Models\Book;
new class extends Component
{
    //
    public $books;
    public $isModalOpen = false;
    public $bookId = null;

    public function mount(){
       $this->books =   Book::all();
    }

    public function deleteBook($id){
        $this->bookId = $id;
        $this->isModalOpen = true;
    }

    public function cancel(){
        $this->bookId = null;
        $this->isModalOpen = false;
    }


    public function deleteBtn(){
       $book =  Book::findOrFail($this->bookId);
       $book->delete();
       $this->books = Book::all();
       $this->isModalOpen = false;
    }
  public function getBookProperty(){
    return Book::all();
  }
};
?>

<div class="max-w-6xl mx-auto grid grid-cols-1 my-4 md:grid-cols-3 p-3 gap-3">
     @foreach ($this->books as $book)
         <div wire:key="{{ $book->id }}" class="flex flex-col gap-3 rounded-2xl w-full bg-gray-500 px-4 py-5">
            <div class="p-2 rounded-md  text-2xl font-bold bg-linear-60 from-orange-300 to-orange-500 w-fit">
            <i class=" fa-solid fa-book-open"></i>
            </div>
            <h1 class="text-gray-200">{{ $book->title }}</h1>
            <h1 >Author Name: {{ $book->author }}</h1>
            <div class="flex justify-between items-center">
            <span class="px-4 py-2 bg-blue-500 text-gray-300 w-fit">Rating: {{ $book->rating }}</span>
            <button wire:click="deleteBook({{ $book->id }})" class="bg-red-500 py-2 px-5 rounded-md text-gray-200">Delete</button>
            </div>
         </div>
     @endforeach

     @if ($isModalOpen)
         <div class="absolute top-1/2 left-1/2 -translate-1/2 p-5  bg-black/90 rounded-md ">
          <div class="flex flex-col text-white">
               <span>Delete a Book</span>
               <span>Are you sure you want to delete this book?</span>
          </div>
          <div class="flex my-4 justify-between items-center">
            <button wire:click="cancel" class="bg-white px-4 py-1">Cancel</button>
            <button wire:click="deleteBtn" class="bg-green-500 px-4 py-1">Yes, Delete</button>
          </div>
        </div>
     @endif
    {{-- Simplicity is an acquired taste. - Katharine Gerould --}}
</div>