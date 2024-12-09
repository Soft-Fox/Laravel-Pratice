<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['employer', 'width' => 90]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['employer', 'width' => 90]); ?>
<?php foreach (array_filter((['employer', 'width' => 90]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<img src="<?php echo e(asset($employer->logo)); ?>" alt="" class="rounded-xl" width=" <?php echo e($width); ?>"><?php /**PATH C:\laragon\www\project1\resources\views/components/employer-logo.blade.php ENDPATH**/ ?>