<x-app-layout>

    <body>
        <!-- partial:index.partial.html -->
        <div id="app" class="md:flex antialiased">
            <aside class="w-full md:h-screen md:w-64 bg-primary md:flex md:flex-col">
                <header class="border-b border-solid border-gray-800 flex-grow">
                    <h1 class="py-6 px-4 text-gray-100 text-base font-medium">Admin</h1>
                </header>
                <nav class="overflow-y-auto h-full flex-grow">
                    <header>
                        <span class="text-xs text-gray-100 block py-6 px-6">MENU</span>
                    </header>
                    <ul class="font-medium px-4 text-left">
                        <li class="text-gray-100">
                            <button href="#performance" v-on:click="select('performance')"
                                class="rounded text-sm text-left block py-3 px-6 hover:bg-blue-600 w-full">Diplomados</button>
                            <button href="#performance" v-on:click="select('new')"
                                class="invisible rounded text-sm block py-3 px-6 hover:bg-blue-600 w-full text-left">Cursos</button>
                            <button href="#performance" v-on:click="select('users')"
                                class="rounded text-sm block py-3 px-6 hover:bg-blue-600 w-full text-left">Usuario</button>
                        </li>
                    </ul>
                </nav>

            </aside>

            <main class="bg-gray-100 h-screen w-full overflow-y-auto">
                <section v-if="active === 'performance'" id="performance">

                    <div class="">
                        <header class="border-b border-solid border-gray-300 bg-white">
                            <h2 class="p-6">Diplomados</h2>
                        </header>
                        <section class="m-4 bg-white border border-gray-300 border-solid rounded shadow">
                            <header class="border-b border-solid border-gray-300 p-4 text-lg font-medium">
                                Diplomados
                            </header>
                            <section class=" flex flex-row flex-wrap items-center text-center border-b border-solid border-gray-300">
                                <ul class="m-5 text-left w-full">
                                    @foreach ($diplomas as $diploma)
                                    <a  href="{{route('diploma.inscriptions',['diploma_id'=>$diploma->id])}}">

                                        <li class="w-full my-3 bg-gray-200 p-2 border-2 rounded-sm hover:bg-slate-300">


                                                {{$diploma->title ??'no definido'}}

                                        </li>
                                    </a>
                                    @endforeach
                               </ul>


                            </section>



                        </section>


                    </div>



                </section>

                <section v-if="active === 'new'" id="new">
                    @livewire('course.index')
                </section>
                <section v-if="active === 'users'" id="users">
                  @livewire('user.index')
                </section>
        </div>
        </main>

        </div>
        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>

        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [5, 7, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 255, 255, 0)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: false
                            }
                        }]
                    }
                }
            });

            new Vue({
                el: '#app',
                data() {
                    return {
                        info: null,
                        active: 'performance'
                    }
                },
                methods: {
                    select: function(x) {
                        this.active = x;
                        console.log(x); // returns 'foo'
                    }
                }
            })
        </script>
</x-app-layout>
