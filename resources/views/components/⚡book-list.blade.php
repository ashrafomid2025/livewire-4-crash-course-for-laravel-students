<?php

use Livewire\Component;

new class extends Component
{
    //
    public $myName = "Ali Reza";
};
?>

<div>
    <h1>Hi I am {{ $myName }}</h1>
    <h1>Hi there, I am comming from book-list component</h1>
    {{-- Simplicity is an acquired taste. - Katharine Gerould --}}
</div>