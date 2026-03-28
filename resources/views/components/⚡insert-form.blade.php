<?php

use Livewire\Component;
use App\Models\Book;
new class extends Component
{
    //
    public $title;
    public $author;
    public $rating;
    
    public function getTitle($name){
        $this->title= $name;
    }
    public function getAuthor($author){
        $this->author = $author;
    }
    public function getRating($r){
        $this->rating = $r;
    }
    public function insertBook(){
       $book =  new Book();
       $book->create([
        "title"=>$this->title,
        "author"=>$this->author,
        "rating"=> $this->rating
       ]);
      return ;
    }
};
?>

<div class="border flex flex-col gap-5 p-5 min-w-1/2">
        <input class="border py-2" wire:input="getTitle($event.target.value)" type="text">
        <input class="border py-2" wire:input="getAuthor($event.target.value)" type="text">
        <input class="border py-2" wire:input="getRating($event.target.value)" type="number">
        <input class="py-2 bg-orange-500 text-white" type="submit" wire:click="insertBook">
    
    {{-- Well begun is half done. - Aristotle --}}
</div>