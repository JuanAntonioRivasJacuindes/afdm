<div class="w-full max-w-md b">
    <form action="<?php echo e(route('course.store')); ?>" method="POST" enctype='multipart/form-data'
        class="bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Titulo</label>
            <input type="text" name="title" id="title" required><br>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                Descripción de 30 - 50 palabras
            </label>
            <textarea name="description" id="description" cols="30" rows="10" required></textarea><br>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="flyer">
                Flyer del curso
            </label>
            <input name="flyer" id="flyer" type="file" accept="image/png, image/gif, image/jpeg" required><br>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="poster">
                Poster del diplomado
            </label>
            <input name="poster" id="poster" type="file" accept="image/png, image/gif, image/jpeg" required><br>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="starts_at">
                Fecha de inicio
            </label>
            <input type="date" name="starts_at" id="starts_at" required><br>

            <label class="block text-gray-700 text-sm font-bold mb-2" for="ends_at">
                Fecha de finalizacion
            </label>
            <input type="date" name="ends_at" id="ends_at"required><br>

        </div>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => []]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Enviar <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    </form>
</div>
<?php /**PATH C:\xampp\htdocs\dev.afodemy.com\resources\views/livewire/course/create-course-form.blade.php ENDPATH**/ ?>