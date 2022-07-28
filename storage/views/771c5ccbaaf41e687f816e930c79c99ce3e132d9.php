<?php $attributes = $attributes->exceptProps(['active']); ?>
<?php foreach (array_filter((['active']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-primary text-base font-medium primary bg-gray-100 focus:outline-none focus:primary focus:bg-indigo-100 focus:border-indigo-700 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:text-primary hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:primary focus:bg-gray-50 focus:border-gray-300 transition';
?>

<a <?php echo e($attributes->merge(['class' => $classes])); ?>>
    <?php echo e($slot); ?>

</a>
<?php /**PATH C:\xampp\htdocs\dev.afodemy.com\resources\views/vendor/jetstream/components/responsive-nav-link.blade.php ENDPATH**/ ?>