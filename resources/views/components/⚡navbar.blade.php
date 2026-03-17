<?php

use Livewire\Component;

new class extends Component
{
    //
    public $myName = "Ali";
    public $date = 0;
    public $greeting = "";
    
    public function getValue($value){
        $this->myName = $value;
    }

    public function mount(){
        date_default_timezone_set("Asia/Kabul");
        $this->date = date("H");
        if($this->date>=18){
            $this->greeting = "Good Evening";
        }
        elseif($this->date >= 12){
            $this->greeting = "Good Afternoon";
        }
        else{
            $this->greeting = "Good Morning";
        }
    }
};
?>

<div class="w-full max-w-6xl mx-auto flex bg-gray-700 rounded-b-xl backdrop-blur-2xl justify-between p-5">
    <h1 class="text-text-color text-2xl font-bold">Hi there,{{ $myName }} {{ $greeting }} </h1>
    <input wire:input="getValue($event.target.value)" type="text" placeholder="Enter Your name"  class=" ring-2 ring-text-color px-2  py-1.5 w-1/3 rounded-md text-gray-400 focus:outline-0" >
    {{-- Do what you can, with what you have, where you are. - Theodore Roosevelt --}}
</div>