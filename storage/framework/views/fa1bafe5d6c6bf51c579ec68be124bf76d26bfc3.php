<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Mis Cursos
        </h2>
     <?php $__env->endSlot(); ?>

    <!-- Section 1 -->
    <section class=" p-5 bg-white md:px-0">
        <div class="container items-center max-w-full px-1 md:px-4 mx-auto xl:px-5">
            <?php if($user->inscriptions->count() == 0): ?>
                <div class="w-full text-center">

                    <svg class="w-20 mx-auto text-gray-700" xmlns="http://www.w3.org/2000/svg" className="h-6 w-6"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <h2 class="text-gray-600 my-5">
                        Aún no estás inscrito en ningún curso
                    </h2>
                </div>
            <?php endif; ?>
            <?php $__currentLoopData = $user->inscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pucharse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <a href="<?php echo e(route('diploma.show', ['product_id' => $pucharse->product->id ,'inscription_id' => $pucharse->id])); ?>"
                    class="hover:shadow-2xl  duration-700 w-full bg-white flex mx-auto  md:my-5  flex-wrap items-center sm:-mx-3 shadow-md">
                    <img class="w-20" src="<?php echo e($pucharse->product->productType()->flyer_url()); ?>" alt="">
                    <div class="   md:w-1/2 md:px-3 px-5  flex items-center">
                        <h1 class="text:sm   uppercase  lg:text-lg font-extrabold tracking-tight text-gray-600 md:text-md">
                            <span class="block xl:inline"><?php echo e($pucharse->product->name ??''); ?></span>
                        </h1>
                    </div>

                    <hr>
                    <br>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dev.afodemy.com\resources\views/dashboard.blade.php ENDPATH**/ ?>