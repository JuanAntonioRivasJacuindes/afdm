<x-app-layout>


    @livewire('diploma.update-diploma-form', ['diploma_id' => $diploma->id])
    @livewire('diploma.update-images', ['diploma_id' => $diploma->id])
    @livewire('info.diploma.index',['diploma_id'=>$diploma->id])
    @livewire('subject.index',['diploma_id'=>$diploma->id])

    {{-- @livewire('stripe.plans',['product_id'=>$diploma->product_id]) --}}
    @livewire('video.subject-videos',['diploma_id'=>$diploma->id])
    @livewire('subproduct.index',['product_id'=>$diploma->product->id])


</x-app-layout>
