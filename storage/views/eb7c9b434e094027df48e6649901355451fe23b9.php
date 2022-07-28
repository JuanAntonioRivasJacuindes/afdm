<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Diplomado de '. $diploma->title)); ?>



        </h2>
     <?php $__env->endSlot(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('diploma.inscripted-users',['diploma_id'=>$diploma->id])->html();
} elseif ($_instance->childHasBeenRendered('ns6X7ad')) {
    $componentId = $_instance->getRenderedChildComponentId('ns6X7ad');
    $componentTag = $_instance->getRenderedChildComponentTagName('ns6X7ad');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ns6X7ad');
} else {
    $response = \Livewire\Livewire::mount('diploma.inscripted-users',['diploma_id'=>$diploma->id]);
    $html = $response->html();
    $_instance->logRenderedChild('ns6X7ad', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dev.afodemy.com\resources\views/diploma/inscription.blade.php ENDPATH**/ ?>