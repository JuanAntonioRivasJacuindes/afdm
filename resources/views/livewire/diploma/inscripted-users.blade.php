    <div>


            <div class="w-full border-collapse p-5 m-4 box-border rounded-lg bg-gray-100">


                <div class="w-full border-collapse box-border rounded-lg bg-gray-100">
                    <header class="flex flex-col border-b border-solid border-gray-300 bg-white">
                        <h2 class="p-6">Inscripciones</h2>
                        <h2 class="p-6">Usuarios Inscritos {{$users->count()}}</h2>
                    </header>
                    @if (session()->has('message'))
                        <div
                            class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700  border border-green-300 ">
                            <div slot="avatar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </div>

                            <div class="text-xl font-normal  max-w-full flex-initial">
                                {{ session('message') }}</div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div>

                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="flex flex-col m-2 p-3 border-separate shadow-md bg-white">
                        <h2 class="py-2">Inscribir Usuario</h2>
                        <div class="flex flex-row">

                            <input required list="users" class="p-2 my-2 rounded-lg w-full mr-2" type="text" placeholder="Usuario"
                            wire:model="addUserId">
                            <datalist class="bg-gray-700" id="users">
                                @foreach ($allUsers as $userx)
                                <option value="{{ $userx->id }}">{{ $userx->email }}</option>
                                @endforeach

                            </datalist>

                            <input required
                            class="block w-full text-sm text-gray-900 bg-gray-50  placeholder-gray-400 p-2 my-1"
                            type="file" wire:model.lazy="voucher" id="">
                            <div wire:loading wire:target="voucher">Subiendo...</div>
                        </div>
                            <x-jet-button class="my-2" wire:click="addInscription">Agregar</x-jet-button>
                        </div>
                    </div>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">

                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Nombre
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Estatus
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Pagos Registrados
                                            </th>

                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($users as $user)
                                        <tr class="hover:bg-slate-200">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                    <a href="{{ route('user.show', $user->id) }}">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img class="h-10 w-10 rounded-full"
                                                                src="{{ $user->profile_photo_url }}" alt="">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ $user->name ?? 'Sin Dato' }}
                                                            </div>
                                                            <div class="text-sm text-gray-500">
                                                                {{ $user->email ?? 'Sin Dato' }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </td>


                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @if ($user->findInscription($diploma->product->id)->allowAccess())

                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                       Al Corriente
                                                    </span>
                                                    @else
                                                    <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                   Sin Acceso
                                                </span>

                                                    @endif

                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <div class="text-sm text-gray-900">{{$user->findInscription($diploma->product->id)->payments->count()}}
                                                    </div>

                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                                </td>
                                            </tr>
                                        @endforeach
                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </div>
