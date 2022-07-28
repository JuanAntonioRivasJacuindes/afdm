    <div>


            <div class="w-full border-collapse p-5 m-4 box-border rounded-lg bg-gray-100">


                <div class="w-full border-collapse box-border rounded-lg bg-gray-100">
                    <header class="flex flex-col border-b border-solid border-gray-300 bg-white">
                        <h2 class="p-6">Inscripciones</h2>
                        <h2 class="p-6">Usuarios Inscritos <?php echo e($users->count()); ?></h2>
                    </header>
                    <?php if(session()->has('message')): ?>
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
                                <?php echo e(session('message')); ?></div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="flex flex-col m-2 p-3 border-separate shadow-md bg-white">
                        <h2 class="py-2">Inscribir Usuario</h2>
                        <div class="flex flex-row">

                            <input required list="users" class="p-2 my-2 rounded-lg w-full mr-2" type="text" placeholder="Usuario"
                            wire:model="addUserId">
                            <datalist class="bg-gray-700" id="users">
                                <?php $__currentLoopData = $allUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($userx->id); ?>"><?php echo e($userx->email); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </datalist>

                            <input required
                            class="block w-full text-sm text-gray-900 bg-gray-50  placeholder-gray-400 p-2 my-1"
                            type="file" wire:model.lazy="voucher" id="">
                            <div wire:loading wire:target="voucher">Subiendo...</div>
                        </div>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'my-2','wire:click' => 'addInscription']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'my-2','wire:click' => 'addInscription']); ?>Agregar <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
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
                                                Name
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Status
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Role
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img class="h-10 w-10 rounded-full"
                                                                src="<?php echo e($user->profile_photo_url); ?>" alt="">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                <?php echo e($user->name ?? 'Sin Dato'); ?>

                                                            </div>
                                                            <div class="text-sm text-gray-500">
                                                                <?php echo e($user->email ?? 'Sin Dato'); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">inscrito
                                                    </div>

                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Activo
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <?php echo e($user->role ?? 'no hay rol asignado '); ?>

                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="<?php echo e(route('user.show', $user->id)); ?>"
                                                        class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </div>
<?php /**PATH C:\xampp\htdocs\dev.afodemy.com\resources\views/livewire/diploma/inscripted-users.blade.php ENDPATH**/ ?>