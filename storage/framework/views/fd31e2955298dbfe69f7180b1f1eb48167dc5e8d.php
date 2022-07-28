<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

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
                                    <?php $__currentLoopData = $diplomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diploma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a  href="<?php echo e(route('diploma.inscriptions',['diploma_id'=>$diploma->id])); ?>">

                                        <li class="w-full my-3 bg-gray-200 p-2 border-2 rounded-sm hover:bg-slate-300">


                                                <?php echo e($diploma->title ??'no definido'); ?>


                                        </li>
                                    </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </ul>


                            </section>



                        </section>


                    </div>



                </section>

                <section v-if="active === 'new'" id="new">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('course.index')->html();
} elseif ($_instance->childHasBeenRendered('EVkjFj9')) {
    $componentId = $_instance->getRenderedChildComponentId('EVkjFj9');
    $componentTag = $_instance->getRenderedChildComponentTagName('EVkjFj9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EVkjFj9');
} else {
    $response = \Livewire\Livewire::mount('course.index');
    $html = $response->html();
    $_instance->logRenderedChild('EVkjFj9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </section>
                <section v-if="active === 'users'" id="users">
                  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.index')->html();
} elseif ($_instance->childHasBeenRendered('c3G0mcI')) {
    $componentId = $_instance->getRenderedChildComponentId('c3G0mcI');
    $componentTag = $_instance->getRenderedChildComponentTagName('c3G0mcI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('c3G0mcI');
} else {
    $response = \Livewire\Livewire::mount('user.index');
    $html = $response->html();
    $_instance->logRenderedChild('c3G0mcI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dev.afodemy.com\resources\views/Admin/coordination-panel.blade.php ENDPATH**/ ?>