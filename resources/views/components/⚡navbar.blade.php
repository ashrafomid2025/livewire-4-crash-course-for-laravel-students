<?php

use Livewire\Component;

new class extends Component
{
    //
    public $myName = "Ali";
    public $date = 0;
    public $greeting = "";
    // if($date<=1){

    // }
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

<div class="w-full flex justify-between p-5">
    <h1 class="text-gray-300 text-3xl font-bold">Hi there,{{ $myName }} {{ $greeting }} </h1>
    <input type="text" class="border border-gray-300 py-1.5 rounded-md text-gray-400 focus:outline-0" >
    {{-- Do what you can, with what you have, where you are. - Theodore Roosevelt --}}
</div>