<x-app-layout>
    <div class="w-full bg-gray-100">
        <div class="w-11/12 bg-white mx-auto  m-5 p-5 text-center">
            Perfíl de Usuario
            <div class="flex flex-row w-full">

                <div>
                    <img class="w-14 " src="{{ $user->profile_photo_url }}" alt="">
                </div>
                <div>

                    <ul class="text-right">
                        <li>Nombre: {{ $user->name }}</li>
                        <li>Email: {{ $user->email }}</li>
                    </ul>
                </div>
            </div>

        </div>


    </div>
    @can('manage_system')

    <div class="w-full bg-gray-100">
        <div class="w-11/12 bg-white mx-auto  m-5 p-5 text-center">

            @livewire('user.roles',['user_id'=>$user->id])
        </div>
    </div>
    @endcan
    <div class="w-full bg-gray-100">
        <div class="w-11/12 bg-white mx-auto  m-5 p-5 text-center">

            @livewire('user.monthly-payments',['user_id'=>$user->id])
        </div>
    </div>
</x-app-layout>
