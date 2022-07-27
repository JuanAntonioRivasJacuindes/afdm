<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diplomado de '. $diploma->title) }}


        </h2>
    </x-slot>
    @livewire('diploma.inscripted-users',['diploma_id'=>$diploma->id])
  </x-app-layout>
