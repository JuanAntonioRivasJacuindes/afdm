<x-app-layout>
    <div class="w-full m-5 p-5 bg-white">
        <header>{{$subproduct->name}}</header>
        <h2>{{$subproduct->description ??'No Definido'}}</h2>
        <h2>{{$subproduct->stipe_id??'no definido'}}</h2>
    </div>

</x-app-layout>
