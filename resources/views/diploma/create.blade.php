<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Crear Diplomado') }}
      </h2>
  </x-slot>
  {{-- livewire de creacion --}}
  @livewire('diploma.create-diploma-form')
</x-app-layout>
