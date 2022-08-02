<x-app-layout>

    <div x-data="{ currentTab: 1 }" class="flex flex-col ">
        <div class="m-auto w-full flex flex-col items-center">

            <div class="container w-full  flex flex-col">
                <!-- Tabs -->
                <ul class="flex w-full overflow-x-scroll">
                    <li>
                        <a href="#" @click.prevent="currentTab = 1"
                            :class="currentTab === 1 ? 'bg-gray-200' : 'bg-white'"
                            class="inline-flex justify-center items-center rounded-t py-4 px-6 font-medium transition">
                            Diplomados
                        </a>
                    </li>
                    <li class="ml-1">
                        <a href="#" @click.prevent="currentTab = 2"
                            :class="currentTab === 2 ? 'bg-gray-200' : 'bg-white'"
                            class="inline-flex justify-center items-center rounded-t py-4 px-6 font-medium transition">
                            Cursos
                        </a>
                    </li>
                    <li class="ml-1">
                        <a href="#" @click.prevent="currentTab = 3"
                            :class="currentTab === 3 ? 'bg-gray-200' : 'bg-white'"
                            class="inline-flex justify-center items-center rounded-t py-4 px-6 font-medium transition">
                            Usuarios
                        </a>
                    </li>
                    <li class="ml-1">
                        <a href="#" @click.prevent="currentTab = 4"
                            :class="currentTab === 4 ? 'bg-gray-200' : 'bg-white'"
                            class="inline-flex justify-center items-center rounded-t py-4 px-6 font-medium transition">
                            Roles y permisos
                        </a>
                    </li>
                </ul>

                <!-- Tabs content -->
                <div x-show="currentTab === 1"
                    class="flex flex-wrap w-full overflow-x-scroll bg-white p-6 rounded-b rounded-tr shadow-md">
                    <p class="leading-6 w-full overflow-scroll"> @livewire('diploma.index')</p>
                </div>
                <div x-show="currentTab === 2"
                    class="flex flex-wrap w-full overflow-x-scroll bg-white p-6 rounded-b rounded-tr shadow-md">
                    <p class="leading-6"> @livewire('course.index')
                    </p>
                </div>
                <div x-show="currentTab === 3"
                    class="flex flex-wrap w-full overflow-x-scroll bg-white p-6 rounded-b rounded-tr shadow-md">
                    <p class="leading-6">@livewire('user.index')</p>
                </div>
                <div x-show="currentTab === 4"
                    class="flex flex-wrap w-full overflow-x-scroll bg-white p-6 rounded-b rounded-tr shadow-md">
                    <p class="leading-6">@livewire('roles.roles-and-perms')</p>
                </div>
            </div>
        </div>
    </div>

    </div>

</x-app-layout>
