<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['tag', 'size' => 'base']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['tag', 'size' => 'base']); ?>
<?php foreach (array_filter((['tag', 'size' => 'base']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-blod transition-colors duration-300";
    
    if ($size === 'base'){
        $classes .= " px-5 py-1 text-sm";
    }
    
    if ($size === 'small'){
        $classes .= " px-3 py-1 text-2xs";
    }
?>

<a href="/tags/<?php echo e(strtolower($tag->name)); ?>" class="<?php echo e($classes); ?>"><?php echo e($tag->name); ?></a><?php /**PATH C:\laragon\www\project1\resources\views/components/tag.blade.php ENDPATH**/ ?>