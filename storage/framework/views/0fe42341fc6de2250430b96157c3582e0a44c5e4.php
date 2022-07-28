<!DOCTYPE html>
<html class="max-w-full"  lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />
        <meta name="og:description" content="<?php echo $__env->yieldContent('description'); ?>" />
        <meta property="og:image" content="<?php echo $__env->yieldContent('image'); ?>" />
        <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>" />
        <meta property="og:url" content="<?php echo $__env->yieldContent('route'); ?>" />
        <meta property="og:site_name" content="Afodemy" />
        <meta property="og:locale" content="es_MX" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TLRH72C2ZZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TLRH72C2ZZ');
</script>

        <title><?php echo e(config('app.name', 'Afodemy')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

        <?php echo \Livewire\Livewire::styles(); ?>


        <!-- Scripts -->
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
    </head>
    <body class="font-sans antialiased">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []]); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <div class="min-h-screen bg-gray-100 layout_background">
          <?php if(!Auth::guest()): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('VZXK929')) {
    $componentId = $_instance->getRenderedChildComponentId('VZXK929');
    $componentTag = $_instance->getRenderedChildComponentTagName('VZXK929');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VZXK929');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('VZXK929', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php else: ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-guest-menu')->html();
} elseif ($_instance->childHasBeenRendered('9dOTCHW')) {
    $componentId = $_instance->getRenderedChildComponentId('9dOTCHW');
    $componentTag = $_instance->getRenderedChildComponentTagName('9dOTCHW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9dOTCHW');
} else {
    $response = \Livewire\Livewire::mount('navigation-guest-menu');
    $html = $response->html();
    $_instance->logRenderedChild('9dOTCHW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

          <?php endif; ?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
            <main>
                <?php echo e($slot); ?>

            </main>
        </div>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
<?php echo $__env->make('partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html>
<script type="text/javascript">

  function openModal(modalId) {

      modal = document.getElementById(modalId)
      modal.classList.remove('hidden')
  }

  function closeModal(modalId) {
      modal = document.getElementById(modalId)
      modal.classList.add('hidden')
  }
</script>
<?php /**PATH C:\xampp\htdocs\dev.afodemy.com\resources\views/layouts/app.blade.php ENDPATH**/ ?>